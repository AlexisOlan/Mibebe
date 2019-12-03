<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi bebé y yo</title>
    <link rel="shortcut icon" href="{{asset('img/maternity.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">    
</head>
<body>
	<div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px">
		<div class="bg-light" style="border-radius: 10px;">
			@include('store.partials.nav')		    
		</div>
	</div>

	@yield('content') <br>

	<div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px">
		<div class="bg-light" style="border-radius: 10px;">
			@include('store.partials.footer')
		</div>
	</div>

	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
</body>
</html