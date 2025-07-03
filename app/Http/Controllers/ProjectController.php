<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  // <-- AJOUTE CETTE LIGNE

class ProjectController extends Controller
{
    public function index()
    {
            $projects = Project::all();
        return response()->json(['data' => $projects]);
    }


    public function show($id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['message' => 'Projet non trouvé'], 404);
        }

        // Récupère le précédent et le suivant
        $previous = Project::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $next = Project::where('id', '>', $id)->orderBy('id')->first();

        return response()->json([
            'project' => $project,
            'previous' => $previous,
            'next' => $next
        ]);
    }
}
