@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [
                {
                    text: 'Cadastrar animal',
                  
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
                    {{__('Animais')}} 
                </div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped display">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Tipo do animal</th>
                                <th>Dono/Responsavel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animals as $animal)
                            <tr>
                                <td>{{ $animal->name }}</td>
                                <td>{{ $animal->animal_type }}</td>                                
                                <td>{{ $animal->costumers->full_name }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="{{ route('animal.edit', $animal->id) }}">Editar</button></a>
                                    <form method="POST" action="{{ route('animal.delete', $animal->id) }}" class="float-left">    
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