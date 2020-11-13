@extends('layouts.app')
@extends('layouts.config')
@section('content')

<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{__('Editar Cliente')}}
                </div>
                <div class="card-body">
                    <form action="{{ route('costumer.update', $costumer) }}" method="POST">
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="full_name">{{__('Nome')}}</label>
                                <input type="text" name="full_name" value="{{ $costumer->full_name }}" class="form-control @error('full_name') is-invalid @enderror" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="phone">{{__('Telefone')}}</label>
                                <input type="text" name="phone" value="{{ $costumer->phone }}" class="form-control @error('phone') is-invalid @enderror" required>

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