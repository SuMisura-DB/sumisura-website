<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\ConstructionProject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class ConstructionProjectController extends Controller
{

    /* Create Project Construction (Obra) */
    public function create(Request $request)
    {

        dd($request->toArray());

        $data = [
            'ref' => null,
            'name' => 'Novo Edifício de Escritórios - Lote A',
            'client_name' => 'João Silva Lda.',
            'description' => 'Descrição da propriedade',
            'summary' => 'Description Summary',
            'in_development' => false,
            // 'completion_date' => '',
            'net_area' => 125,
            'gross_area' => 265,
            'terrain_area' => 540,
            'floors' => 3,
            'address' => 'Rua de Angola, 25',
            'terrain_area' => 540,
            'latitude' => 41.157944,
            'longitude' => -8.629105,
            'youtube_id' => null,
            'is_featured' => true,
            'visibility' => true,
            'active' => true,
        ];

        try {
            $project = ConstructionProject::create($data);

            // O registo é criado, e o $project contém a instância.

            if ($project && $project->id) {
                // ✅ Sucesso: O projeto foi criado e tem um ID.

                // Update ref according to ID of project
                $property_ref = 'SM' . $project->id;
                $project->ref = $property_ref;

                $project->save();

                return response()->json(['message' => 'Projeto criado com sucesso!', 'id' => $project->id], 201);
            }

        } catch (\Exception $e) {
            // ❌ Falha: Capturar exceções de base de dados ou validação.
            return response()->json(['error' => 'Falha ao criar o projeto: ' . $e->getMessage()], 500);
        }

        dump($project);
        dd($request->toArray());
    }

}
