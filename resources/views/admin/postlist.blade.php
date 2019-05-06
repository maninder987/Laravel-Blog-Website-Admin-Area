@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">
                  <table cellpadding="10">
                      @if($posts)
                          @foreach($posts as $post)
                              <tr>
                                <td>
                                  <img src="{{$post->featured}}" alt="{{$post->title}}" width='100px'>
                                </td>
                                <td>
                                  {{$post->title}}
                                </td>
                                
                                <td>
                                    <a href="{{ route('admin.editpost',['id'=>$post->id]) }}">edit</a>
                                </td>
                                <td >
                                    <a href="#">delete</a>
                                </td>
                              </tr>
                          @endforeach
                      @endif
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
