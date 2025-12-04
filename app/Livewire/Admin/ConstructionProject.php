<?php

namespace App\Livewire\Admin;

use App\Models\ConstructionProject;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ConstructionProjectForm extends Component
{
    // Public properties = your form fields
    public string $title = '';
    public string $description = '';
    public string $status = 'Published';
    public string $visibility = 'Public';

    // Simple validation rules
    protected array $rules = [
        'title'       => 'required|string|min:3',
        'description' => 'nullable|string',
        'status'      => 'required|in:Published,Scheduled,Draft',
        'visibility'  => 'required|in:Public,Hidden',
    ];

    public function save()
    {
        $data = $this->validate();

        try {
            ConstructionProject::create([
                'title'       => $data['title'],
                'description' => $data['description'] ?? '',
                'status'      => $data['status'],
                'visibility'  => $data['visibility'],
            ]);

            // Reset form if you want
            $this->reset(['title', 'description', 'status', 'visibility']);
            $this->status = 'Published';
            $this->visibility = 'Public';

            // Fire event for Velzon toast
            $this->dispatch('show-toast', type: 'success', message: 'Obra criada com sucesso!');
        } catch (\Throwable $e) {
            Log::error('Error creating construction project', ['error' => $e->getMessage()]);

            $this->dispatch('show-toast', type: 'error', message: 'Erro ao criar a obra. Tenta novamente.');
        }
    }

    public function render()
    {
        // return view('livewire.admin.construction-project-form');
        return view('livewire.admin.construction-projects-create');
    }
}
