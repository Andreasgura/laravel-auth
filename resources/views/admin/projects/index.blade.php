@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>I tuoi progetti</h1>
        @foreach ($projects as $project)
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
        @endforeach

    </section>
@endsection
