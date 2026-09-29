<?php

use App\Livewire\ProdutoCreate;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro/produto', ProdutoCreate::class)->name('produto.create');
