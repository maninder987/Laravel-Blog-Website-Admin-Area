@extends('layouts.app')


@section('content')
<form class="form" action="{{  route('category.add') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <input type="text" name="category" placeholder='Add Category Here' class='form-control'>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" class='btn btn-info'>
  </div>
</form>
@endsection
