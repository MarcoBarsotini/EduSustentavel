<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{

    public function index() {
        $user = Auth::user();

    if (!in_array(strtolower($user->user_type), ['aluno', 'professor'])) {
        abort(403, 'Você não tem permissão para acessar este conteúdo.');
    }

    $modules = Module::with('course')
                ->orderBy('order')
                ->get();

    return view('modules.index', compact('modules'));
    }

    public function show($id) {
        $user = Auth::user();

        if (!in_array($user->user_type, ['aluno', 'professor'])) {
            abort(403, 'Você não tem permissão para acessar este conteúdo.');
        }

        $module = Module::with(['course', 'lessons' => function ($q) {
            $q->orderBy('order');
        }])->findOrFail($id);

        return view('modules.show', compact('module'));
    }
}