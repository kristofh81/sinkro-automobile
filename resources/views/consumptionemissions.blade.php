
		<li>
			{!! Form::label('specifications', 'Specifications:') !!}
			<br>
			{!! Form::radio('specifications1', 'value', true , array('class' => 'radio-button'))!!}non specificato
			<br>
			{!! Form::radio('specifications2', 'value', false , array('class' => 'radio-button'))!!}valori approssimativi
			<br>
			{!! Form::radio('specifications3', 'value', false , array('class' => 'radio-button'))!!}ai sensi del DP 17 febbraio 2003 n.84
			

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
