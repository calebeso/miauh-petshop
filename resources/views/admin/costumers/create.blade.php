@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [{
                text: 'Cadastrar Cliente',

            }]
        });
    });
</script>
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-6">
            <form action="{{ route('costumer.store') }}" method="POST">
                @csrf
                <div class="md-form mt-3">
                    <label for="materialSubscriptionFormPasswords">Nome completo</label>
                    <input type="text" id="materialSubscriptionFormPasswords" name="full_name" class="form-control">
                    
                </div>

                <div class="md-form">
                    <label for="materialSubscriptionFormEmail">Telefone</label>
                    <input type="text" id="materialSubscriptionFormEmail" name="phone"class="form-control">
                </div>

                <div class="md-form">
                    <label for="materialSubscriptionFormEmail">CPF</label>
                    <input type="text" id="materialSubscriptionFormEmail" name="cpf"class="form-control">
                </div>

                

                <button class="btn btn-primary mt-3" type="submit">Salvar</button>

            </form>
        </div>
    </div>

    @stop