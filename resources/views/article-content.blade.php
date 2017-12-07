@extends('layouts.site')
@section('content')
<div id="sortColumn" align="left">
	<h3>Сортировка:</h3>
	<p><a href="{{route('return')}}">По дате добавления</a></p>
	<p>По тэгу:</p>
	<ul>
	@foreach($maintags as $maintag)
	<li><a href="{{route('searchontags',['tagpage'=>$maintag->maintag])}}">{{$maintag->maintag}}</a></li>
	@endforeach
	</ul>
</div>
	<div id="centralList" align="center">
		@if($article)
			<div class="mainlist">
			<h3>{{$article->title}}</h3>
			<p>{{$article->text}}</p>
			<p>Тэг:<a href="{{route('searchontags',['tagpage'=>$article->tag])}}">{{$article->tag}}</a></p>
			<p>Дата создания:{{$article->created_at->format('d.m.Y')}}</p>
			<a href="{{route('return')}}">На главную страницу</a>
			</div>
		@endif
	</div>
	@endsection