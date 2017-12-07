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
		@foreach($diffs as $diff)
			<div class="mainlist">
			<a href="{{route('articlePage',['id'=>$diff->id])}}"><h3>{{$diff->title}}</h3></a>
			<p>{{$diff->desc}}</p>
			<p>Тэг:<a href="{{route('searchontags',['tagpage'=>$diff->tag])}}">{{$diff->tag}}</a></p>
			</div>
		@endforeach
		{{$diffs->links()}}
	</div>
@endsection