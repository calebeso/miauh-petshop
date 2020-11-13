@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [
                {
                    text: 'Cadastrar cliente',
                  
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
                    {{__('Clientes')}} 
                </div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped display">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>CPF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($costumers as $costumer)
                            <tr>
                                <td>{{ $costumer->full_name }}</td>
                                <td>{{ $costumer->phone }}</td>
                                <td>{{ $costumer->cpf }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="{{ route('costumer.edit', $costumer->id) }}">Editar</button></a>
                                    <form method="POST" action="{{ route('costumer.delete', $costumer->id) }}" class="float-left">    
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