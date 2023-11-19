// routes/api.php

use App\Http\Controllers\Api\CarreraController;

Route::get('/carreras', [CarreraController::class, 'index']);
// Puedes agregar otras rutas según tus necesidades
