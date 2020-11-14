@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [{
                text: 'Cadastrar Animal',
            }]
        });
    });
</script>
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-6">
            <form action="{{ route('animal.store') }}" method="POST">
                @csrf
                <div class="md-form mt-3">

                    <label for="name">Nome</label>
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" class="form-control">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>

                </div>

                <div class="md-form">
                    <label for="animal_type">Tipo do animal</label>
                    <input type="text" id="animal_type" class="form-control @error('animal_type') is-invalid @enderror" name="animal_type" class="form-control">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('animal_type') }}</strong>
                    </span>
                </div>

                <button class="btn btn-primary mt-3" type="submit">Salvar</button>

            </form>
        </div>
    </div>

    @stop