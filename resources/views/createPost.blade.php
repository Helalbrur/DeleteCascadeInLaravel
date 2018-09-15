@extends('layouts.app')
@section('content')

  <div class="row">
      <div class="col col-md-2"></div>
      <div class="col col-md-8">
          <form action="{{route('savePost')}}" method="POST">
            @csrf
            <div class="form-group">
              <select name="category_id" class="form-control">
                <option>Seclet Category</option>
                  <?php $cats=DB::table('categories')->get();?>
                  @foreach($cats as $cat)
                  <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <input type="text" name="content" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" class="btn btn-sm btn-info">
            </div>
            <div class="form-group">
              @if(count($errors))

                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>

                </div>
              @endif
            </div>
          </form>
      </div>
      <div class="col col-md-2"></div>
  </div>
@endsection