@extends('layouts.app')
@section('content')

  <div class="row">
      <div class="col col-md-2"></div>
      <div class="col col-md-8">
          <form action="{{route('saveCategory')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="category_name" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" class="btn btn-sm btn-info">
            </div>
          </form>
      </div>
      <div class="col col-md-2"></div>
  </div>
@endsection