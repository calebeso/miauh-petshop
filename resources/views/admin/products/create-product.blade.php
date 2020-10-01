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
                    <input type="text" id="materialSubscriptionFormPasswords" name="description" class="form-control">
                    <label for="materialSubscriptionFormPasswords">Descrição</label>
                </div>

                <!-- E-mai -->
                <div class="md-form">
                    <input type="number" id="materialSubscriptionFormEmail" name="price"class="form-control">
                    <label for="materialSubscriptionFormEmail">Preço</label>
                </div>

                <select class="form-control" name="category_id">
                    @foreach($categories as $categoryID => $category)
                        <option value="{{$categoryID}}">{{$category}}</option>
                    @endforeach
                </select>

                <button class="btn btn-primary" type="submit">Salvar</button>

            </form>
        </div>
    </div>

    @stop