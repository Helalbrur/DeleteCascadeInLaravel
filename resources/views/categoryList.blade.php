@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col col-md-9"></div>
    <div class="col col-md-3">
      <a href="{{route('createCategory')}}" class="btn btn-sm btn-info">Add</a>
    </div>
  </div>
  <div class="row">
      <div class="col col-md-2">
       
      </div>
      <div class="col col-md-8">

          <table class="table">
              <tr>
                <td>No</td>
                <td>Category name</td>
                <td>Action</td>
              </tr>
              <?php $cats=DB::table('categories')->get();?>
              @foreach( $cats as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->category_name}}</td>
                <td><a href="{{route('delete_cat',$cat->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
              </tr>
              @endforeach
          </table>
      </div>
      <div class="col col-md-2"></div>
  </div>
@endsection