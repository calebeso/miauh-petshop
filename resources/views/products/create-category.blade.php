@extends('layouts.app')
@extends('layouts.config')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a category</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('categories.store') }}">
          @csrf
          <div class="md-form mt-3">
                    <input type="text" id="materialSubscriptionFormPasswords" name="description" class="form-control">
                    <label for="materialSubscriptionFormPasswords">Descrição</label>
                </div>               
          <button type="submit" class="btn btn-primary-outline">Add category</button>
      </form>
  </div>
</div>
</div>
@stop