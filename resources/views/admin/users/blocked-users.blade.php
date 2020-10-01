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
                    Users
                </div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped display">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                            
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td>
                                <form action="{{ route('admin.restore-users', $user->id) }}" method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('GET') }}
                                            <button type="submit" class="btn btn-success">{{_('Habilitar')}}</button>
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