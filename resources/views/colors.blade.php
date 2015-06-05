{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('color_type', 'Color_type:') !!}
			{!! Form::text('color_type') !!}
		</li>
		<li>
			{!! Form::label('manufacturer', 'Manufacturer:') !!}
			{!! Form::text('manufacturer') !!}
		</li>
		<li>
			{!! Form::label('metallic', 'Metallic:') !!}
			{!! Form::text('metallic') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}