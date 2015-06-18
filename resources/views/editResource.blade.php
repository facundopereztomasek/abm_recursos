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

		{!! Form::model($resource, array('route' => array('resources.update' , $resource->id ),'method' => 'patch', 'files' => true)) !!}
			{!! Form::text('title') !!}
			{!! Form::text('description') !!}
			{!! Form::text('url') !!}
			{!! Form::select('category_id', $categories ) !!}
			{!! Form::file('image') !!}
			{!! Form::submit('Submit!', array('class' => 'name')) !!}

		{!! Form::close() !!}

		@if($errors->any())
			<ul>
				<?php echo implode( '', $errors->all('<li>:message</li>')) ?>
			</ul>

		@endif

	</body>
</html>
