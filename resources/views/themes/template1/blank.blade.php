<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TABLEWARE POS:</title>


	<style>
		:root
		{
			--menuHeight:53px;
			--mainColor1:#55300e;
			--mainColor2:#96724d;
			--mainColor3:#e3c099;
			--mainColor4:#ffff;
		}	

		html, body
		{
			padding:0;
			margin:0;

			font-family:'Sarabun';
		}

	
		#body
		{
			
			padding:1rem;
			min-height:calc(100vh - (var(--menuHeight) + 2rem));
			background:#eee;
			/* min-height:120vh; */
		}

		
	</style>
	
	@stack('css')
</head>
<body>
	@yield('blank-content')

	@stack('js')
</body>
</html>