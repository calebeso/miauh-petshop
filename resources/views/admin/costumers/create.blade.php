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

                    <label for="full_name">Nome completo</label>
                    <input type="text" id="full_name" class="form-control @error('full_name') is-invalid @enderror" name="full_name" class="form-control">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('full_name') }}</strong>
                    </span>

                </div>

                <div class="md-form">
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" class="form-control">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                </div>

                <div class="md-form">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" class="form-control @error('cpf') is-invalid @enderror" name="cpf">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                </div>

                <button class="btn btn-primary mt-3" type="submit">Salvar</button>

            </form>
        </div>
    </div>

    @stop