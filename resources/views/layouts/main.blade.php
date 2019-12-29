<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<style>
		html, body {
			overflow: auto;
			height: 100%;
			/*background-color: pink;*/
			background-color: rgb(19,20,23);
		}
		.wrap{
			position: relative;
			min-height: 100%;
		}
		#navbar {
			position: fixed;
			top: 0;
			text-align: right;
			background-color: #444857;
			padding: 5px;
			width: 100%;
			z-index: 2;
			margin-bottom: 30px;
		}
		#navbar a {
			text-decoration: none;
			color: white;
		}
		#sidebar {
			position: absolute;
			top: 0;
			width: 200px;
			min-height: 100%;
			background-color: rgb(40, 41, 48);
			/*background-color: rgb(30, 31, 38);*/
			overflow: auto;
			z-index: 1;
		}
		#content {
			padding: 35px 10px 55px 10px;
			margin-right: 5px;
			margin-left: 210px;
			/*height: 500px;*/
			background-color: rgb(19,20,23);
		}
		#footer {
			box-sizing: border-box;
			position: absolute;
			left: 0;
			bottom: 0;
			padding-left: 10px;
			padding-top: 10px;
			height: 50px;
			width: 100%;
			background-color: skyblue;
			z-index: 2;
		}
	</style>
</head>
<body>
	<div id="navbar">
		@include('layouts.navbar')
	</div>
	<div id="sidebar">
		@include('layouts.sidebar')
	</div>
	<div class="wrap">
		<div id="content">
			@yield('css')
			@yield('main_content')
		</div>
		<footer id="footer">
			@include('layouts.footer')
		</footer>
	</div>
	@yield('javascript')
</body>
{{-- import bootstrap plugin --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
