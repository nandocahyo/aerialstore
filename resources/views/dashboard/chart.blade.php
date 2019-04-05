<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Charts</title>

	{!! Charts::styles !!}
</head>
<body>
	<div class="app">
		<center>
			{!! $chart->html() !!}
		</center>
	</div>
	{!! Charts::scripts() !!}
	{!! $chart->script() !!}

</body>
</html>