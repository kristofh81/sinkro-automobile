{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('specifications', 'Specifications:') !!}
			{!! Form::text('specifications') !!}
		</li>
		<li>
			{!! Form::label('consumption_urban', 'Consumption_urban:') !!}
			{!! Form::text('consumption_urban') !!}
		</li>
		<li>
			{!! Form::label('consumption_suburban', 'Consumption_suburban:') !!}
			{!! Form::text('consumption_suburban') !!}
		</li>
		<li>
			{!! Form::label('consumption_general', 'Consumption_general:') !!}
			{!! Form::text('consumption_general') !!}
		</li>
		<li>
			{!! Form::label('emission_co2', 'Emission_co2:') !!}
			{!! Form::text('emission_co2') !!}
		</li>
		<li>
			{!! Form::label('class_energy_efficiency', 'Class_energy_efficiency:') !!}
			{!! Form::text('class_energy_efficiency') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}