@extends('layouts.app')
@section('content')



<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').dataTable();
} );
</script>
 <div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Users
                </div>
                <div class="card-body">
                <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
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
 

 
