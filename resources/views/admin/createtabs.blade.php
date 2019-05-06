@extends('layouts.app')


@section('content')
  <form class="form" action="{{ route('admin.tabs') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" name="tabs" class='form-control' placeholder='Add New Tab Name'>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" class='btn btn-info'>
    </div>
  </form>
@endsection
