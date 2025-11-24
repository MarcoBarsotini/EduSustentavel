<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller {
    public function show(Lesson $lesson) {
        $user = Auth::user();

        if (!in_array($user->user_type, ['aluno', 'professor'])) {
            abort(403, 'Você não tem permissão para acessar este conteúdo.');
        }
        
        return view('lessons.show', compact('lesson'));
    }
}