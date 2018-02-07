@extends('layouts.app')

@section('content')
<section class="container">
  <a href="{{url('article/create')}}" class="btn btn-primary pull-right">新增</a>
  <table class="table table-hover">
    @foreach ($query as $var)
      <tr>
        <td>{{$var->id}}</td>
        <td><a href="{{url('article/'.$var->id)}}">{{$var->title}}</a></td>
        <td><a href="{{url('article/'.$var->id.'/edit')}}" class="btn btn-warning">编辑</a></td>
        <td>
            <form action="{{url('article/'.$var->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" role="btn" class="btn btn-danger" value="删除">
            </form>
        </td>
      </tr>
    @endforeach
  </table>
</section>
@endsection
