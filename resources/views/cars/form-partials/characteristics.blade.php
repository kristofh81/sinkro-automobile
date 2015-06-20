<h3>Caratteristiche</h3>
<div class="table-responsive">
<h4>Comfort e interni:</h4>
<table class="table table-condensed">
<tr>	
		<td>
			{!! Form::label('Climatizzatore') !!}
			{!! Form::select('airco', array(
					'0' => 'Seleziona',
					'Manuale o automatico' => 'Manuale o automatico',
					'Automatico' => 'Automatico',
					'Senza climatizzatore' => 'Senza climatizzatore',
					), null, array('class' => 'form-control')) !!}
		</td>
		<td>
			{!! Form::label('Numero posti') !!}
			{!! Form::select('seats_number', array(
					'0' => 'Seleziona',
					'1 - 2' => '1 - 2',
					'3 - 6' => '3 - 6',
					'Oltre 6' => '> 6',
					), null, array('class' => 'form-control')) !!}
		</td>
		<td></td>
</tr>
<tr>
		<td>
			{!! Form::label('Design interno') !!}
			{!! Form::select('internal_design', array(
					'0' => 'Seleziona',
					'Alcantara' => 'Alcantara',
					'Pelle integrale' => 'Pelle integrale',
					'Pelle parziale' => 'Pelle parziale',
					'Stoffa' => 'Stoffa',
					'Velour' => 'Velour',
					'Altro' => 'Altro',
					), null , array('class' => 'form-control')) !!}
		</td>
		<td>
			{!! Form::label('Colori interno') !!}
			{!! Form::select('internal_color', array(
					'0' => 'Seleziona',
					'Beige' => 'Beige',
					'Grigio' => 'Grigio',
					'Marrone' => 'Marrone',
					'Nero' => 'Nero',
					'Altro' => 'Altro',
					), null , array('class' => 'form-control')) !!}
		</td>
		<td>
		</td>
</tr>
<tr>
		
		<td>
			{!! Form::checkbox('park_sensors') !!}
			{!! Form::label('park_sensors') !!}
		</td>
		<td>
			{!! Form::checkbox('bluetooth') !!}
			{!! Form::label('bluetooth') !!}
		</td>
		<td>
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('cd_player') !!}
			{!! Form::label('cd_player') !!}
		</td>
		<td>
			{!! Form::checkbox('electrically_adjustable_seats') !!}
			{!! Form::label('electrically_adjustable_seats') !!}
		</td>
		<td>
			{!! Form::checkbox('display_headup') !!}
			{!! Form::label('display_headup') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('multifunction_assistent') !!}
			{!! Form::label('multifunction_assistent') !!}
		</td>
		<td>
			{!! Form::checkbox('panoramic_view') !!}
			{!! Form::label('panoramic_view') !!}
		</td>
		<td>
			{!! Form::checkbox('ski_bag') !!}
			{!! Form::label('ski_bag') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('auxiliary_heating') !!}
			{!! Form::label('auxiliary_heating') !!}
		</td>
		<td>
			{!! Form::checkbox('radio_system') !!}
			{!! Form::label('radio_system') !!}
		</td>
		<td>
			{!! Form::checkbox('on_board_computer') !!}
			{!! Form::label('on_board_computer') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('electric_windows') !!}
			{!! Form::label('electric_windows') !!}
		</td>
		<td>
			{!! Form::checkbox('handsfree_kit') !!}
			{!! Form::label('handsfree_kit') !!}
		</td>
		<td>
			{!! Form::checkbox('interface_mp3') !!}
			{!! Form::label('interface_mp3') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('navigation') !!}
			{!! Form::label('navigation') !!}
		</td>
		<td>
			{!! Form::checkbox('convertible_roof') !!}
			{!! Form::label('convertible_roof') !!}
		</td>
		<td>
			{!! Form::checkbox('seat_heating') !!}
			{!! Form::label('seat_heating') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sporttype_seats') !!}
			{!! Form::label('sporttype_seats') !!}
		</td>
		<td>
			{!! Form::checkbox('cruise_control') !!}
			{!! Form::label('cruise_control') !!}
		</td>
		<td>
			{!! Form::checkbox('central_door_lock') !!}
			{!! Form::label('central_door_lock') !!}
		</td>
</tr>
</table>
<h4>Caratteristiche esterne:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::checkbox('tow_bar') !!}
			{!! Form::label('tow_bar') !!}
		</td>
		<td>
			{!! Form::checkbox('alloy_wheels') !!}
			{!! Form::label('alloy_wheels') !!}
		</td>
		<td>
			{!! Form::checkbox('roof_rack') !!}
			{!! Form::label('roof_rack') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sport_suspension') !!}
			{!! Form::label('sport_suspension') !!}
		</td>
		<td>
			{!! Form::checkbox('electronic_side_windows') !!}
			{!! Form::label('electronic_side_windows') !!}
		</td>
		<td>
			{!! Form::checkbox('sport_package') !!}
			{!! Form::label('sport_package') !!}
		</td>
</tr>
</table>
<h4>Sicurezza e ambiente:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::label('class_emission') !!}
			{!! Form::select('class_emission', array(
					'0' => 'Seleziona', 
					'euro1' => 'euro1', 
					'euro2' => 'euro2', 
					'euro3' => 'euro3', 
					'euro4' => 'euro4', 
					'euro5' => 'euro5', 
					'euro6' => 'euro6'), null, array('class' => 'form-control')) !!}
		
		</td>
		<td>
			{!! Form::label('airbag') !!}
			{!! Form::select('airbag', array(
					'0' => 'Seleziona', 
					'conducente' => 'airbag conducente', 
					'anteriori' => 'airbag anteriori', 
					'anteriori e laterali' => 'airbag anteriori e laterali', 
					'anteriori e laterali e di altro tipo' => 'airbag anteriori - laterali - di altro tipo',
					), null, array('class' => 'form-control')) !!}					
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('immobilizer') !!}
			{!! Form::label('immobilizer') !!}
		</td>
		<td>
			{!! Form::checkbox('isofix') !!}
			{!! Form::label('isofix') !!}
		</td>
		<td>
			{!! Form::checkbox('fog_lights') !!}
			{!! Form::label('fog_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('rain_sensor') !!}
			{!! Form::label('rain_sensor') !!}
		</td>
		<td>
			{!! Form::checkbox('daytime_running_lights') !!}
			{!! Form::label('daytime_running_lights') !!}
		</td>
		<td>
			{!! Form::checkbox('xenon_lights') !!}
			{!! Form::label('xenon_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('traction_integral') !!}
			{!! Form::label('traction_integral') !!}
		</td>
		<td>
			{!! Form::checkbox('esp') !!}
			{!! Form::label('esp') !!}
		</td>
		<td>
			{!! Form::checkbox('adaptive_lights') !!}
			{!! Form::label('adaptive_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('light_sensor') !!}
			{!! Form::label('light_sensor') !!}
		</td>
		<td>
			{!! Form::checkbox('filter_antiparticles') !!}
			{!! Form::label('filter_antiparticles') !!}
		</td>
		<td>
			{!! Form::checkbox('start_stop_system') !!}
			{!! Form::label('start_stop_system') !!}
		</td>
</tr>
<tr>
		<td>	
			{!! Form::checkbox('servo') !!}		
			{!! Form::label('servo') !!}			
		</td>
		<td>			
			{!! Form::checkbox('traction_control') !!}
			{!! Form::label('traction_control') !!}
		</td>
		<td>
			{!! Form::checkbox('abs') !!}
			{!! Form::label('abs') !!}			
		</td>
</tr>
</table>
<h4>Options:</h4>
<table class="table table-condensed">
<tr>			
		<td>		
			{!! Form::checkbox('access_handicapped') !!}
			{!! Form::label('access_handicapped') !!}
		</td>
		<td>		
			{!! Form::checkbox('taxi') !!}
			{!! Form::label('taxi') !!}
		</td>
		<td>
	
			{!! Form::checkbox('guarantee') !!}
			{!! Form::label('guarantee') !!}
		</td>
</tr>
<tr>
		<td>				
			{!! Form::checkbox('service_booklet') !!}
			{!! Form::label('service_booklet') !!}
		</td>
		<td>			
			{!! Form::checkbox('non_smoking') !!}
			{!! Form::label('non_smoking') !!}	
		</td>
		<td>			
		</td>
</tr>
</table>
</div>