<?php
use Illuminate\Support\Facades\Route;

//Controladores adicionais do sistema
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Contracts\ContractController;
use App\Http\Controllers\Contracts\ReviewController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\TermosController;
use App\Http\Controllers\Mail\ContactController;
use App\Http\Controllers\Public\PublicUserController;

// Controlers das Licoes
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;

//admin
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/termos-de-servico', [TermosController::class, 'termos_servico'])->name('terms.termos_servico');
Route::get('/politica-de-privacidade', [TermosController::class, 'politica_privacidade'])->name('terms.politica_privacidade');

Route::middleware('auth')->group(function () {
    //Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.update.photo');

    //Rota para perfil publico
    Route::get('/clientes/{id}', [PublicUserController::class, 'show'])->name('clientes.show');

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Cursos e Licoes
    Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
    Route::get('/modules/{id}', [ModuleController::class, 'show'])->name('modules.show');

    //Contato
    Route::get('/contato', function () {
        return view('contato');
    })->name('contato');
    Route::post('/contato/send', [ContactController::class, 'send'])->name('contact.send');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Rota para o dashboard do admin
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Rotas para gerenciar usuários
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('users.create');
    Route::post('/users', [AdminUserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.destroy');

});

// Telas de Erros
Route::get('/500', function () {
    return view('errors/500');
});
Route::get('/503', function () {
    return view('errors/503');
});
Route::get('/504', function () {
    return view('errors/504');
});

require __DIR__.'/auth.php';