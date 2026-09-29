<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $prazo_validade;
    public $quantidade_minima;
    public $peso;
    public $unidade_medida;

    public function store(){
        $produto = Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'prazo_validade' => $this-> prazo_validade,
            'quantidade_minima' => $this->quantidade_minima,
            'peso' => $this->peso,
            'unidade_medida' => $this->unidade_medida
        ]);

        session()->flash('sucess', 'Produto cadastrado!');
         return redirect()->route('produto-index');
    
    }

    public function render()
    {
        return view('livewire.produto-create');
    }
}
