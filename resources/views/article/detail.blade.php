@extends('layouts.app')

@section('content')
<section class="container">
<h1>
{{ $query->title}}
</h1>
<p>
{{ $query->content}}
</p>
</section>
@endsection
