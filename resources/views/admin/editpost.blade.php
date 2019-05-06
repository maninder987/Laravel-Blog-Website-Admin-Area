@extends('layouts.app')


@section('content')
<?php $post = json_decode(json_encode($singlepost), true); ?>
<h3>Update Post Data</h3>
  <div class="col-md-12">
    <form class="form" action="" method="post">
        <div class="thumbnail">
            <img src="{{$post['featured']}}" alt="{{$post['title']}}" width="200px">
        </div>
            <hr>
            <label for="image">Select Image To Change </label>
            <br>
        <div class="form-group">
            <input type="file" name="image" class='form-control'>
        </div>
        <div class="form-group">
            <input type="text" name="title" value="{{$post['title']}}" class='form-control'>
        </div>
        <div class="form-group">
            <textarea type="text" name="content"  class='form-control' rows='5 '>{{$post['content']}}</textarea>
        </div>

        @if($allcategory)
          <label>Category In Database : <?php echo $singlecat->category; ?></label><br>
          <label for="category">Select New Category </label>
          <select class="form-control" name="category">
              @foreach($allcategory as $cat)
                  <option value="{{$cat->id}}" >{{$cat->category}}</option>
              @endforeach
          </select>
        @endif

        <div class="form-group">
          @if($alltabs)
          <label for="tabs">Tabs </label><br>
                @foreach($alltabs as $tab)
                <input type="checkbox" name="tab[]" value="{{$tab->tabs}}"> {{$tab->tabs}}<br>
                @endforeach

          @endif
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value='update' class='btn btn-info'>
        </div>

    </form>
  </div>
@endsection
