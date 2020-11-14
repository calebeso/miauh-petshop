@extends('layouts.app')
@extends('layouts.config')
@section('content')

<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{__('Editar Animal')}}
                </div>
                <div class="card-body">
                    <form action="{{ route('animal.update', $animal) }}" method="POST">
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="name">{{__('Nome')}}</label>
                                <input type="text" name="name" value="{{ $animal->name }}" class="form-control @error('name') is-invalid @enderror" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="animal_type">{{__('Tipo de animal')}}</label>
                                <input type="text" name="animal_type" value="{{ $animal->animal_type }}" class="form-control @error('animal_type') is-invalid @enderror" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-primary register">
                            Atualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop 