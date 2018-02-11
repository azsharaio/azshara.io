@extends('layouts.app')

@section('content')
 {!! editor_css() !!}
<section class="container">
<form action="{{ url('article/'.$query->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <input type="text" name="title" class="form-control" value="{{ $query->title}}">
    <div id="mdeditor">
        <textarea class="form-control" name="content" style="display:none;">
            {{ $query->content}}
        </textarea>
    </div>
{!! editor_js() !!}
{!! editor_config('mdeditor') !!}
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
