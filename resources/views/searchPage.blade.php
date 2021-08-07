@extends('layouts.base')


@section('searchPage')

<h1 class="all-projects-heading text-center mt-2 p-2">Searched Results</h1>

<div class="container">

    @if ($searched_items)
        @foreach ($searched_items as $project)
        <div class="card m-2 p-2 projects-main-card" style="width: 20rem;">
        <img  class="card-img-top" src="/images/{{$project->project_thumbnail}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$project->project_title}}</h5>
            <hr>
            <p class="card-text">{{$project->project_description}}</p>
            <a href="{{$project->project_github_link}}" target="_blank" class="btn btn-success">GitHub</a>
            <a href="{{$project->project_video_link}}" target="_blank" class="btn btn-danger">YouTube</a>
        </div>
        </div>
        @endforeach
    @endif

</div>


@endsection

