
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;

Route::get('/produkAja', [ProdukController::class, 'index']);


// ==================1==================
// Tambahkan route GET ke /dashboard yang memanggil method index() dari DashboardController

Route::get('/products', [ProductController::class, 'index'])->name('product');
