	<div class='col-md-6'>
			{!! Form::label('specifications', 'Specifications:') !!}
		<br>
			{!! Form::radio('specifications', '0', true , array('class' => 'radio-button'))!!}non specificato
		<br>
			{!! Form::radio('specifications', '1', false , array('class' => 'radio-button'))!!}valori approssimativi
		<br>
			{!! Form::radio('specifications', '2', false , array('class' => 'radio-button'))!!}ai sensi del DP 17 febbraio 2003 n.84
	</div>

	<div class='col-md-6'>
		<br>
			{!! Form::label('consumption_urban', 'Consumption_urban:') !!}
			{!! Form::text('consumption_urban',null, array('class' => 'form-control')) !!}
			<em>(l/100km)</em>
		<br>
			{!! Form::label('consumption_suburban', 'Consumption_suburban:') !!}
			{!! Form::text('consumption_suburban', null, array('class' => 'form-control')) !!}
			<em>(l/100km)</em>
		<br>
			{!! Form::label('consumption_general', 'Consumption_general:') !!}
			{!! Form::text('consumption_general', null, array('class' => 'form-control')) !!}
			<em>(l/100km)</em>
		<br>
			{!! Form::label('emission_co2', 'Emission_co2:') !!}
			{!! Form::text('emission_co2', null, array('class' => 'form-control')) !!}
			<em>(g/km)</em>
		<br>
			{!! Form::label('class_energy_efficiency', 'Class_energy_efficiency:') !!}
			{!! Form::select('class_energy_efficiency', array(
					'0' => 'Seleziona', 
					'1' => 'euro1', 
					'2' => 'euro2', 
					'3' => 'euro3', 
					'4' => 'euro4', 
					'5' => 'euro5', 
					'6' => 'euro6'), null, array('class' => 'form-control')) !!}
	</div>