<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CoderHunt</title>
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/modernizr-2.6.2.min.js') }}
    <style>
		.mid{
			height: 100%;
			width: 100%;
			position: fixed;
			/*background-color: aqua;*/
			text-align: center;
			vertical-align: middle;
			margin: 0px auto;
		}
		.mid h1{
			margin-top: 10%;
			color: #333;
		}
    </style>

</head>
<body>
    @include('partials.matrix')

    <div class="mid">
        <h1>{{ strtoupper("Website is under maintenance!") }}</h1>
		<p>Kindly check back after a week :)</p>
	</div>

</body>
</html>
