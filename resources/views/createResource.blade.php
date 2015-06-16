<html>
	<head>
		<title>Recursos</title>

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 10px;
				width: 100%;
				height: 100%;
				display: table;
				font-weight: 700;
				font-family: 'Lato';
				font-size: 24px
			}
		</style>
	</head>
	<body>

		{!! Form::open(array('route' => 'resources.store')) !!}
			{!! Form::text('title', null, array('placeholder'=>'T&iacute;tulo')) !!}
			{!! Form::text('description', null, array('placeholder'=>'Descripci&oacute;n')) !!}
			{!! Form::text('url', null, array('placeholder'=>'URL')) !!}
			{!! Form::select('category_id', $categories ) !!}

			{!! Form::submit('Submit!', array('class' => 'name')) !!}
		{!! Form::close() !!}

	</body>
</html>
