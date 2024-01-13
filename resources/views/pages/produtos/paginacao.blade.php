@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    
    <div>
        <form action="{{ route('produto.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome...">
            <button class="btn btn-light"> Pesquisar </button>
            <a type="button" href="" class="btn btn-success float-end">
                Incluir Produto
            </a>
        </form>

        <div class="table-responsive mt-4">
            @if ($findProduto->isEmpty())
                <p>Nenhum dado foi encontrado</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th >Nome</th>
                            <th >Valor</th>
                            <th >Acoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProduto as $pr)
                            <tr>
                                <td>{{ $pr->nome }}</td>
                                <td>{{ 'R$ ' . number_format($pr->valor, 2, ',', '.') }}</td>
                                <td>
                                    <a href="" class="btn btn-light btn-sm">
                                        Editar
                                    </a>
                                    <a href="{{ route('produto.delete') }}" class="btn btn-light btn-sm">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div> 
    </div>

@endsection