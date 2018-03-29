@extends('layouts.app')

@section('content')
<section class="container">
<h2>
{{ $query->title}}
</h2>
{!! Parsedown::instance()->setMarkupEscaped(true)->text($query->content) !!}

</section>
@endsection
