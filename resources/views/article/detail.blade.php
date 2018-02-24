@extends('layouts.app')

@section('content')
<section class="container">
<h2>
{{ $query->title}}
</h2>
{!! ParsedownExtra::instance()->setBreaksEnabled(true)->setBreaksEnabled(true)->text($query->content) !!}
<!-- {!!$query->content !!} -->
</section>
@endsection
