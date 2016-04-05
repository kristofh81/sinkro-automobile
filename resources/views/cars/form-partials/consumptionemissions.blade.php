	<div class='col-md-4'>
			{!! Form::label('specifications', 'Specificazioni:') !!}
		<br>
			{!! Form::radio('specifications', '0', ($carcheck!=='create' && $consumptionemission->specifications==0? true : true) , '')!!}non specificato
		<br>
			{!! Form::radio('specifications', '1', ($carcheck!=='create' && $consumptionemission->specifications==1? true : false) , '')!!}valori approssimativi
		<br>
			{!! Form::radio('specifications', '2', ($carcheck!=='create' && $consumptionemission->specifications==2? true : false) , '')!!}ai sensi del DP 17 febbraio 2003 n.84
	</div>

	<div class='col-md-4'>
		{!! Form::label('consumption_urban', 'Consumo carburante (urbano):') !!}
		<div class=" input-group">
			<span class="input-group-addon"><em>(l/100km)</em></span>
			{!! Form::text('consumption_urban',($carcheck!=='create' ? $consumptionemission->consumption_urban : null), array('class' => 'form-control')) !!}
		</div>
		{!! Form::label('consumption_suburban', 'Consumo carburante (extraurbano):') !!}
		<div class=" input-group">
			<span class="input-group-addon"><em>(l/100km)</em></span>
			{!! Form::text('consumption_suburban', ($carcheck!=='create' ? $consumptionemission->consumption_suburban : null), array('class' => 'form-control')) !!}
		</div>		
		{!! Form::label('consumption_general', 'Consumption appross.:') !!}
		<div class=" input-group">
			<span class="input-group-addon"><em>(l/100km)</em></span>
			{!! Form::text('consumption_general', ($carcheck!=='create' ? $consumptionemission->consumption_general : null), array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class='col-md-4'>	
		{!! Form::label('emission_co2', 'Emissioni CO2:') !!}
		<div class=" input-group">
			<span class="input-group-addon"><em>(g/km)</em></span>
			{!! Form::text('emission_co2', ($carcheck!=='create' ? $consumptionemission->emission_co2 : null), array('class' => 'form-control')) !!}
		</div>

		{!! Form::label('class_energy_efficiency', 'Classe di efficienza energia:') !!}
			{!! Form::select('class_energy_efficiency', array(
					'0' => 'Seleziona', 
					'1' => 'euro1', 
					'2' => 'euro2', 
					'3' => 'euro3', 
					'4' => 'euro4', 
					'5' => 'euro5', 
					'6' => 'euro6'), ($carcheck!=='create' ? $consumptionemission->class_energy_efficiency : null) , array('class' => 'form-control')) !!}
	</div>