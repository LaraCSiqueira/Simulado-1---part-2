<div class="container-fluid p-0 bg-light" style="min-height: 100vh;">
    <div class="d-flex" style="min-height: 100vh;">
        <div class="bg-white border-end p-3 shadow-sm" style="width: 260px;">
            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="#" class="nav-link active bg-primary-subtle text-primary fw-medium rounded-3">
                        <i class="bi bi-box-seam me-3 fs-5" style="color:rgb(127, 142, 255)"></i><span>CADASTRO</span>
                    </a>
                    <br>
                    <a href="#" class="nav-link active bg-primary-subtle text-primary fw-medium rounded-3">
                        <i class="bi bi-box-seam me-3 fs-5"></i><span>HISTÓRICO</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex-grow-1 d-flex flex-column">

            <nav class="navbar navbar-light bg-white px-4 border-bottom" style="height: 74px;">
                <div class="container-fluid d-flex align-items-center justify-content-between p-0">
                    <div style="width: 350px;">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0 text-muted rounded-start-pill ps-3">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control bg-light border-0 rounded-end-pill py-2"
                                placeholder="Pesquisar...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="position-relative">
                            <i class="bi bi-bell fs-5 text-secondary"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 10px;">2</span>
                        </div>
                        <div class="text-end d-none d-sm-block">
                            <div class="fw-bold text-dark" style="font-size: 14px;">Usuário</div>
                            <div class="text-muted" style="font-size: 11px;">usuario@email.com</div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="p-4 p-md-5 flex-grow-1">

                <div class="row g-4">

                    <div class="">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                            <h5 class="fw-bold mb-4 text-dark">Cadastrar Novo Produto</h5>

                            <form wire:submit.prevent="cadastrarProduto">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">NOME DO PRODUTO</label>
                                        <input type="text" class="form-control rounded-pill bg-light py-2"
                                            wire:model="nome" placeholder="Ex: Argamassa AC3">
                                        @error('nome')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">DESCRIÇÃO</label>
                                        <input type="text" class="form-control rounded-pill bg-light py-2"
                                            wire:model="sku" placeholder="Ex: Oferece aderência em porcelanatos...">
                                        @error('sku')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">PRAZO DE VALIDADE</label>
                                        <input type="date" class="form-control rounded-pill bg-light py-2"
                                            wire:model="validade">
                                        @error('validade')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">COR</label>
                                        <select class="form-select rounded-pill bg-light py-2" wire:model="cor">
                                            <option value="">Selecione uma cor...</option>
                                            <option value="cinza">Cinza</option>
                                            <option value="branco">Branco</option>
                                            <option value="preto">Preto</option>
                                            <option value="vermelho">Vermelho</option>
                                            <option value="azul">Azul</option>
                                        </select>
                                        @error('cor')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">TEXTURA</label>
                                        <select class="form-select rounded-pill bg-light py-2" wire:model="textura">
                                            <option value="">Selecione uma textura...</option>
                                            <option value="liso">Liso</option>
                                            <option value="rugoso">Rugoso</option>
                                            <option value="fosco">Fosco</option>
                                            <option value="brilhante">Brilhante</option>
                                            <option value="poroso">Poroso</option>
                                        </select>
                                        @error('textura')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">PESO</label>
                                        <input type="number" step="0.01"
                                            class="form-control rounded-pill bg-light py-2" wire:model="peso"
                                            placeholder="0.00">
                                        @error('peso')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">UNIDADE DE
                                            MEDIDA</label>
                                        <select class="form-select rounded-pill bg-light py-2"
                                            wire:model="unidade_medida">
                                            <option value="">Selecione...</option>
                                            <option value="kg">KG (Quilograma)</option>
                                            <option value="g">G (Gramas)</option>
                                            <option value="l">L (Litros)</option>
                                            <option value="ml">ML (Mililitros)</option>
                                            <option value="un">UN (Unidade)</option>
                                        </select>
                                        @error('unidade_medida')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">QUANTIDADE
                                            MÍNIMA</label>
                                        <input type="number" class="form-control rounded-pill bg-light py-2"
                                            wire:model="quantidade_minima" placeholder="Ex: 5" min="0">
                                        @error('quantidade_minima')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit"
                                    class="btn btn-primary w-100 rounded-pill py-2 fw-bold mt-3 shadow-sm">
                                    Salvar Produto
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>