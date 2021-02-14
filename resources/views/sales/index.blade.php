@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [
                {
                    text: 'Listar vendas',
                  
                }
            ]
        });
    });
</script>
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{__('Vendas')}} 
                </div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped display">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Produto</th>
                                <th>Serviço</th>
                                <th>Usuário</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                            <tr>
                                <td>{{ $sale->costumer_id }}</td>
                                <td>{{ $sale->product_id }}</td>
                                <td>{{ $sale->service_id }}</td>
                                <td>{{ $sale->user_id }}</td>
                                <td>{{ number_format($sale->total, 2) }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="">Editar</button></a>
                                    <form method="POST" action="" class="float-left">    
                                    @csrf
                                    {{ method_field('DELETE') }} 
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop