@extends('layouts.app')


@section('content')
<form class="form" action="{{ route('admin.createpost') }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <input type="text" name="title" placeholder='Add Title Here' class='form-control'>
  </div>
  <div class="form-group">
    <textarea type="text" name="content" placeholder='Add Content Here' class='form-control' rows='5'></textarea>
  </div>
  <div class="form-group">
    <label for="file">Add A Featured Image</label><br>
    <input type="file" name="featured"  class='form-control'>
  </div>
  <div class="form-group">
    <label for="category">Category </label><br>
    @if($category)
      <select class="form-control" name="category">
          @foreach($category as $cat)
          <option value="{{$cat->id}}" >{{$cat->category}}</option>
          @endforeach
      </select>
    @endif
  </div>

  <div class="form-group">
    @if($tabs)
    <label for="tabs">Tabs </label><br>
          @foreach($tabs as $tab)
          <input type="checkbox" name="tab[]" value="{{$tab->tabs}}"> {{$tab->tabs}}<br>
          @endforeach

    @endif
  </div>
  <div class="form-group">
    <input type="submit" name="submit" class='btn btn-info'>
  </div>
</form>
@endsection
