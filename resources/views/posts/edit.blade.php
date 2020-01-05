@extends('layouts.layouts')
@section('title','Simple Board')
@section('content')
<form method="POST" action="/posts{{ $post->id }}">
  {{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
  <div class="form-group">
   <label for="exampleInputEmail1">Title</label>
   <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title')=='' ? $post->title:old('title') }}">
  </div>
  <div class="form-group">
   <label for="exampleInputEmail1">Title</label>
   <textarea class="form-control" name="content">{{ old('content') == '' ? $post->content : old('content') }}</textarea>
  </div>
  <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection

<h1>Editing Post</h1>

@if($errors->any())
 <div class="alert alert-danger">
   <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
   </ul>
 </div>
@endif
