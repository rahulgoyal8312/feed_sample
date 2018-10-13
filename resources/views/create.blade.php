@extends('Layout.app')

@section('content')
<form method='Post' action="/post">
  {{ csrf_field() }}
  <br>
  <div class="form-group">
    <label for="title">Title</label>
    <input  class="form-control" id="title" name='title' placeholder="Enter title"></input>

  </div>
  <div class="form-group">
    <label for='body'>Body </label>
    <textarea class='form-control' id='body' name='body' placeholder='Enter your body here...'></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button><br>

  @if(count($errors))
  <div class='form-group'>
    <div class='alert alert-danger'>
<ul>
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
    </ul> 
</div>
</div>
     @endif

</form>
@endsection