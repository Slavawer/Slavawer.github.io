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
		@foreach($articles as $article)
			<div class="mainlist">
			<a href="{{route('articlePage',['id'=>$article->id])}}"><h3>{{$article->title}}</h3></a>
			<p>{{$article->desc}}</p>
			<p>Тэг:<a href="{{route('searchontags',['tagpage'=>$article->tag])}}">{{$article->tag}}</a></p>
			</div>
		@endforeach
		{{$articles->links()}}
	</div>
@endsection