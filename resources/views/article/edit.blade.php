@extends('layouts.app')

@section('content')
<section class="container">
<form action="{{ url('article/'.$query->id) }}" method="POST">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <input type="text" name="title" class="form-control" value="{{ $query->title}}">
  <textarea name="content" id="" cols="30" rows="10" class="form-control" >{{ $query->content}}</textarea>
  <input type="submit" name="提交" class="btn btn-primary" >
</form>
</section>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
