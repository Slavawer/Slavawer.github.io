<!DOCTYPE html>
<html>
<head>
	<title>ProgrammersSpace</title>
	<meta charset="UTF-8">
	<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<h1>{{$header}}</h1>
		<h2>{{$discription}}</h2>
	</header>
	<div id="addtext" align="center">
	<a href="{{route('add')}}" >Добавить запись</a>
	</div>
	@if(count($errors)>0)
		<div class="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	@yield('content')
	<footer>
	<h3>Выполнил: Тимофеев Вячеслав</h3>
	<h6>Контакты:</h6>
	<div id="VK" align="center" >
	<a href="https://vk.com/slava_tim">->Вконтакте<-</a>
	</div>
	</footer>
</body>
</html>