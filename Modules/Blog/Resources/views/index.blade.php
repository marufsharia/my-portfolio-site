@extends('layouts.app')

@section('content')
<h1>sads</h1>

<p>
    This view is loaded from module: {!! config('blog.name') !!}
</p>
<livewire:blog::show />
@endsection