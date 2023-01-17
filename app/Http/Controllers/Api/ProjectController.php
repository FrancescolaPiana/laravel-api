<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Project::with('tecnologies', 'Category')->paginate(5);
        // return response()->json([
        //     'success' => true,
        //     'results' => $projects
        // ]);
        $project = Project::all();
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
    public function show($slug)
    {
        // $project = Project::with('tecnologies', 'category')->where('slug', $slug)->first();
        $project = Project::all();
        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project
            ]);

        } else {
            return response()->json([
                'success' => false,
                'results' => 'Nessun progetto trovato'
            ]);
        }
    }
}