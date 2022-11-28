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
			/* min-height:120vh; */
		}

		
	</style>
	
	@stack('css')
</head>
<body>
	@include('modal.main')


	@include('themes.template1.inc.header')
	
	<div id="body">
		<span>
			abcdfg ทดสอบภาษาไทย
		</span>
		
	</div>


	@stack('js')

</body>
</html>