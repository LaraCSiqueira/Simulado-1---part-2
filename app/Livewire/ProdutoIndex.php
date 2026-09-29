<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public $nome;
    public $descricao;
    public $prazo_validade;
    public $quantidade_minima;
    public $peso;
    public $unidade_medida;

    public $search = '';

    public function delete($id)
    {
        $produto = Produto::find($id);

        if ($produto != null) {
            $produto->delete();
            session()->flash('sucess', 'Produto excluído!');
        }

        return view('livewire.produto-index', compact('produtos'));
    }


    public function render()
    {

        $produtos = Produto::where('nome', 'like', '%' . $this->search . '%')->get();
        return view('livewire.produto-index', compact('produtos'));
    }
}
