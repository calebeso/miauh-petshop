@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [
                {
                    text: 'Cadastrar usuário',
                  
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
                    {{__('Serviços')}} 
                </div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped display">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($services as $service)
                            <tr>
                                <td>{{ $service->description }}</td>
                                <td>@convert($service->price)</td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="{{ route('service.edit', $service->id) }}">Editar</button></a>
                                    <form method="POST" action="{{ route('service.delete', $service->id) }}" class="float-left">    
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