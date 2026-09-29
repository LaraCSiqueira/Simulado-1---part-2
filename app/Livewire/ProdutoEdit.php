<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto_id;
    public $nome;
    public $descricao;
    public $prazo_validade;
    public $quantidade_minima;
    public $peso;
    public $unidade_medida;


    public function mount($id)
    {
        $produto = Produto::find($id);

        if ($produto == null) {
            session()->flash('Error', 'Não encontrado');
            return redirect()->route('produto-index');
        }

        $this->produto_id = $produto->id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->prazo_validade = $produto->prazo_validade;
        $this->quantidade_minima = $produto->quantidade_minima;
        $this->peso = $produto->peso;
        $this->unidade_medida = $produto->unidade_medida;

    }

    public function update(){
         $produto = Produto::find($this->produto_id);

         if ($produto == null) {
            session()->flash('Error', 'Produto atualizado!');
            return redirect()->route('produto-index');
        }

        $this->produto_id = $produto->id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->prazo_validade = $produto->prazo_validade;
        $this->quantidade_minima = $produto->quantidade_minima;
        $this->peso = $produto->peso;
        $this->unidade_medida = $produto->unidade_medida;

        $produto -> save();



    }



    public function render()
    {
        return view('livewire.produto-edit');
    }
}
