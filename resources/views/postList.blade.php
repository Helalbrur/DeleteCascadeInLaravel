@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col col-md-9"></div>
    <div class="col col-md-3">
      <a href="{{route('createPost')}}" class="btn btn-sm btn-info">Add</a>
    </div>
  </div>
  <div class="row">
      <div class="col col-md-2">
       
      </div>
      <div class="col col-md-8">

          <table class="table">
              <tr>
                <td>No</td>
                <td>Post content</td>
                <td>Action</td>
              </tr>
             
              @foreach( $posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->content}}</td>
                <td><a href="{{route('delete_post',$post->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
              </tr>
              @endforeach
          </table>
      </div>
      <div class="col col-md-2"></div>
  </div>
@endsection