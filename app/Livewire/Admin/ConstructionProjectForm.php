<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ConstructionProject;
use Illuminate\Support\Facades\Storage;

class ConstructionProjectForm extends Component
{
    public $project = null;

    public $title = '';
    public $status = 'Published';
    public $visibility = 'Public';
    public $short_description = null;
    public $description = null;

    // Temp images uploaded by Dropzone (paths in tmp/)
    public array $tempImages = [];

    // Existing images from final folder (for edit)
    public array $existingImages = [];

    public function mount(ConstructionProject $project = null)
    {
        $this->project = $project;

        if ($project) {
            $this->title             = $project->title;
            $this->status            = $project->status;
            $this->visibility        = $project->visibility;
            $this->short_description = $project->short_description;
            $this->description       = $project->description;

            $folder = "assets/construction/{$project->id}/gallery";
            $this->existingImages = Storage::disk('public')->exists($folder)
                ? Storage::disk('public')->files($folder)
                : [];
        }
    }

    protected function rules()
    {
        return [
            'title'             => ['required', 'string', 'max:255'],
            'status'            => ['required', 'string'],
            'visibility'        => ['required', 'string'],
            'short_description' => ['nullable', 'string'],
            'description'       => ['nullable', 'string'],
        ];
    }

    // Called from JS when Dropzone upload succeeds
    public function addTempImage(string $path): void
    {
        if (!in_array($path, $this->tempImages, true)) {
            $this->tempImages[] = $path;
        }
    }

    // Called from JS when user removes a Dropzone thumbnail
    public function removeTempImage(string $path): void
    {
        // remove from array
        $this->tempImages = array_values(
            array_filter($this->tempImages, fn ($p) => $p !== $path)
        );

        // delete physical temp file
        Storage::disk('public')->delete($path);
    }

    // Delete already-saved image on EDIT
    public function deleteExistingImage(string $path): void
    {
        Storage::disk('public')->delete($path);

        $this->existingImages = array_values(
            array_filter($this->existingImages, fn ($p) => $p !== $path)
        );
    }

    public function save()
    {

        dd($this);
        $this->validate();

        // 1) Save / update project
        $project = $this->project ?? new ConstructionProject();
        $project->title             = $this->title;
        $project->status            = $this->status;
        $project->visibility        = $this->visibility;
        $project->short_description = $this->short_description;
        $project->description       = $this->description;
        $project->save();

        $this->project = $project;

        // 2) Move temp images to final folder
        $finalFolder = "assets/construction/{$project->id}/gallery";

        foreach ($this->tempImages as $tempPath) {
            $filename = basename($tempPath);
            Storage::disk('public')->makeDirectory($finalFolder);
            Storage::disk('public')->move($tempPath, "{$finalFolder}/{$filename}");
        }

        // 3) Refresh existing images and clear temp list
        $this->tempImages = [];

        $this->existingImages = Storage::disk('public')->exists($finalFolder)
            ? Storage::disk('public')->files($finalFolder)
            : [];

        session()->flash('success', 'Obra guardada com sucesso.');
    }

    public function render()
    {
        return view('livewire.admin.construction-project-form');
    }
}
