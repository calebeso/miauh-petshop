@extends('layouts.app')
@extends('layouts.config')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable({
            buttons: [{
                text: 'Cadastrar Produto',

            }]
        });
    });
</script>
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-6">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="md-form mt-3">
                    <label for="materialSubscriptionFormPasswords">Descrição</label>
                    <input type="text" id="materialSubscriptionFormPasswords" name="description" class="form-control">
                    
                </div>

                <!-- E-mai -->
                <div class="md-form">
                    <label for="materialSubscriptionFormEmail">Preço</label>
                    <input type="number" id="materialSubscriptionFormEmail" name="price"class="form-control">
                    
                </div>

                <div class="md-form mt-3">
                <p>Categoria</p>
                <select class="form-control" name="category_id">
                    @if($categories->count() > 1))
                        <option value="" data-code="">{{__('Selecione uma categoria')}}</option>
                    @endif
                    @foreach($categories as $categoryID => $category)
                        <option value="{{$categoryID}}">{{$category}}</option>
                    @endforeach
                </select>
                </div>

                <button class="btn btn-primary mt-3" type="submit">Salvar</button>

            </form>
        </div>
    </div>

    @stop