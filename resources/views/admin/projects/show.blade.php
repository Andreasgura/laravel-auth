@extends('layouts.app')
@section('content')
<section class="container">
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>    
</section>
@endsection