@extends('layouts.app')

@section('content')
<section class="container">
<form action="{{url('article')}}" method="POST" >
  {{ csrf_field() }}
  <input type="text" name="title" class="form-control"></input>
  <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
  <input type="submit" name="提交" class="btn btn-primary" />
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
