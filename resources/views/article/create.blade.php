@extends('layouts.app')

@section('content')
{!! editor_css() !!}
<section class="container">
<form action="{{url('article')}}" method="POST" >
  {{ csrf_field() }}
  <input type="text" name="title" class="form-control"></input>

  <div id="mdeditor">
      <textarea class="form-control" name="content" style="display:none;">
      </textarea>
  </div>
{!! editor_js() !!}
{!! editor_config('mdeditor') !!}
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
