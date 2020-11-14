@extends('layouts.app')
@extends('layouts.config')
@section('content')

<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{__('Editar Serviço')}}
                </div>
                <div class="card-body">
                    <form action="{{ route('service.update', $service) }}" method="POST">
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="description">{{__('Descrição')}}</label>
                                <input type="text" name="description" value="{{ $service->description }}" class="form-control @error('description') is-invalid @enderror" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="price">{{__('Preço')}}</label>
                                <input type="number" name="price" value="{{ $service->price }}" class="form-control @error('price') is-invalid @enderror" required>

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