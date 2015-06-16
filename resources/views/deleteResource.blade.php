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

		<p>{{$resource->title}}</p>
		<p>{{$resource->description}}<p>
		<p>{{$resource->url}}<p>
		<p>{{$resource->image_file}}<p>
		<p>{{$resource->tags}}<p>


		{!! Form::open(array(
			'route' => array('resources.destroy', $resource->id),'method' => 'delete')) !!}
			{!! Form::submit('Eliminar', array('class' => 'name')) !!}
		{!! Form::close() !!}

	</body>
</html>
