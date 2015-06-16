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
		<p>Recursos</p>
		<ul>
			@foreach( $resources as $resource)
				<li>
					<p>{{$resource->title}}</p>
					<p>{{$resource->description}}<p>
					<p>{{$resource->url}}<p>
					<p>{{$resource->image_file}}<p>
					<p>{{$resource->tags}}<p>
					<p>{{$resource->category->name}}<p>
					{!! link_to_route('resources.edit', $title = 'Editar', $parameters = array( $resource->id ), $attributes = array()) !!}
					{!! link_to_route('resources.destroy', $title = 'Eliminar', $parameters = array( $resource->id ), $attributes = array()) !!}
				</li>
			@endforeach
		</ul>
		{!! link_to_route('resources.create', $title = 'Nuevo Recurso', null , $attributes = array()) !!}
	</body>
</html>
