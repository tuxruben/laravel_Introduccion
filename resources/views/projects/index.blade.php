@extends('layout')
@section('title','home')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
<h1 class="display-4">@lang('Home')</h1>

@auth
<a class="btn btn-primary mb-0" href="{{route('projects.create')}}">Crear un nuevo proyecto</a>
@endauth
</div>
<p class="lead text-secondary">Proyectos de</p>
<ul class="list-group">

	@forelse($projects as $project)
	 <li class="list-group-item border-0 mb-3 shadow-sm"><a class="text-secondary  d-flex justify-content-between align-items-center" href="{{route('projects.show', $project)}}">
<span class="font-weight-bold">
	 	{{$project->title}}
</span>
	 	 <br>
	 	 <span>{{$project->description}} </span> <span class="text-black-50">{{$project->created_at->diffForHumans()}} </span></a><pre>{{$loop->last ? 'esl el ultimo ': ''}}</pre> </li>

	@empty
	<li  class="list-group-item border-0 mb-3 shadow-sm">@lang('No Hay proyectos para mostrar')</li>
	 @endforelse
	 {{$projects->links()}}

</ul>
</div>
@endsection