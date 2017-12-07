@extends('layouts.site')
@section('content')

<div class="form" align="center">
	
	<form method="POST" action="{{route('articleStore')}}">
		<div class="form-group">
			<label for="title">Заголовок</label>
			<input  type="text" class="form-control" id="title" name="title"/>
		</div>
		<div class="form-group">
			<label for="tag">Тэг</label>
			<input  type="text" class="form-control" id="tag" name="tag"/>
		</div>
		<div class="form-group">
			<label for="exempleInputFile">Краткое описание</label>
			<textarea  type="text" class="form-control" name="desc"></textarea>
		</div>
		<div class="form-group">
			<label for="exempleInputFile">Полный текст</label>
			<textarea  type="text" class="form-control" name="text"></textarea>
		</div>
		<button type="submit" class="bttn">Добавить</button>
		{{ csrf_field() }}
	</form>
	<div id="onmainpage">
	<a href="{{route('return')}}">На главную страницу</a>
	</div>
</div>

@endsection