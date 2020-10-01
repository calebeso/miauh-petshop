@extends('layouts.app')
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
                        <div>
                        <button type="submit" class="btn btn register">
                            Atualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop