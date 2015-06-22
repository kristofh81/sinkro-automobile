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
					), ($car!=='create' ? $characteristics->airco : null), array('class' => 'form-control')) !!}
		</td>
		<td>
			{!! Form::label('Numero posti') !!}
			{!! Form::select('seats_number', array(
					'0' => 'Seleziona',
					'1' => '1 - 2',
					'2' => '3 - 6',
					'3' => '> 6',
					), ($car!=='create' ? $characteristics->seats_number : null), array('class' => 'form-control')) !!}
		</td>
		<td><!--pladeholding space--></td>
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
					), ($car!=='create' ? $characteristics->internal_design : null) , array('class' => 'form-control')) !!}
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
					), ($car!=='create' ? $characteristics->internal_color : null) , array('class' => 'form-control')) !!}
		</td>
		<td><!--pladeholding space-->
		</td>
</tr>
<tr>
		
		<td>
			{!! Form::checkbox('park_sensors', 1, ($car!=='create' ? $characteristics->internal_color : false) , '') !!}
			{!! Form::label('park_sensors') !!}
		</td>
		<td>
			{!! Form::checkbox('bluetooth',  1, ($car!=='create' ? $characteristics->bluetooth : false) , '') !!}
			{!! Form::label('bluetooth') !!}
		</td>
		<td>
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('cd_player', 1, ($car!=='create' ? $characteristics->cd_player : false) , '') !!}
			{!! Form::label('cd_player') !!}
		</td>
		<td>
			{!! Form::checkbox('electrically_adjustable_seats', 1, ($car!=='create' ? $characteristics->electrically_adjustable_seats : false) , '') !!}
			{!! Form::label('electrically_adjustable_seats') !!}
		</td>
		<td>
			{!! Form::checkbox('display_headup', 1, ($car!=='create' ? $characteristics->display_headup : false) , '') !!}
			{!! Form::label('display_headup') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('multifunction_assistent', 1, ($car!=='create' ? $characteristics->multifunction_assistent : false) , '') !!}
			{!! Form::label('multifunction_assistent') !!}
		</td>
		<td>
			{!! Form::checkbox('panoramic_view', 1, ($car!=='create' ? $characteristics->panoramic_view : false) , '') !!}
			{!! Form::label('panoramic_view') !!}
		</td>
		<td>
			{!! Form::checkbox('ski_bag', 1, ($car!=='create' ? $characteristics->ski_bag : false) , '') !!}
			{!! Form::label('ski_bag') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('auxiliary_heating', 1, ($car!=='create' ? $characteristics->auxiliary_heating : false) , '') !!}
			{!! Form::label('auxiliary_heating') !!}
		</td>
		<td>
			{!! Form::checkbox('radio_system', 1, ($car!=='create' ? $characteristics->radio_system : false) , '') !!}
			{!! Form::label('radio_system') !!}
		</td>
		<td>
			{!! Form::checkbox('on_board_computer', 1, ($car!=='create' ? $characteristics->on_board_computer : false) , '') !!}
			{!! Form::label('on_board_computer') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('electric_windows', 1, ($car!=='create' ? $characteristics->electric_windows : false) , '') !!}
			{!! Form::label('electric_windows') !!}
		</td>
		<td>
			{!! Form::checkbox('handsfree_kit', 1, ($car!=='create' ? $characteristics->handsfree_kit : false) , '') !!}
			{!! Form::label('handsfree_kit') !!}
		</td>
		<td>
			{!! Form::checkbox('interface_mp3', 1, ($car!=='create' ? $characteristics->interface_mp3 : false) , '') !!}
			{!! Form::label('interface_mp3') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('navigation', 1, ($car!=='create' ? $characteristics->navigation : false) , '') !!}
			{!! Form::label('navigation') !!}
		</td>
		<td>
			{!! Form::checkbox('convertible_roof', 1, ($car!=='create' ? $characteristics->convertible_roof : false) , '') !!}
			{!! Form::label('convertible_roof') !!}
		</td>
		<td>
			{!! Form::checkbox('seat_heating', 1, ($car!=='create' ? $characteristics->seat_heating : false) , '') !!}
			{!! Form::label('seat_heating') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sporttype_seats', 1, ($car!=='create' ? $characteristics->sporttype_seats : false) , '') !!}
			{!! Form::label('sporttype_seats') !!}
		</td>
		<td>
			{!! Form::checkbox('cruise_control', 1, ($car!=='create' ? $characteristics->cruise_control : false) , '') !!}
			{!! Form::label('cruise_control') !!}
		</td>
		<td>
			{!! Form::checkbox('central_door_lock', 1, ($car!=='create' ? $characteristics->central_door_lock : false) , '') !!}
			{!! Form::label('central_door_lock') !!}
		</td>
</tr>
</table>
<h4>Caratteristiche esterne:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::checkbox('tow_bar', 1, ($car!=='create' ? $characteristics->tow_bar : false) , '') !!}
			{!! Form::label('tow_bar') !!}
		</td>
		<td>
			{!! Form::checkbox('alloy_wheels', 1, ($car!=='create' ? $characteristics->alloy_wheels : false) , '') !!}
			{!! Form::label('alloy_wheels') !!}
		</td>
		<td>
			{!! Form::checkbox('roof_rack', 1, ($car!=='create' ? $characteristics->roof_rack : false) , '') !!}
			{!! Form::label('roof_rack') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sport_suspension', 1, ($car!=='create' ? $characteristics->sport_suspension : false) , '') !!}
			{!! Form::label('sport_suspension') !!}
		</td>
		<td>
			{!! Form::checkbox('electronic_side_windows', 1, ($car!=='create' ? $characteristics->electronic_side_windows : false) , '') !!}
			{!! Form::label('electronic_side_windows') !!}
		</td>
		<td>
			{!! Form::checkbox('sport_package', 1, ($car!=='create' ? $characteristics->sport_package : false) , '') !!}
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
					'euro6' => 'euro6'), ($car!=='create' ? $characteristics->class_emission : null), array('class' => 'form-control')) !!}
		
		</td>
		<td>
			{!! Form::label('airbag') !!}
			{!! Form::select('airbag', array(
					'0' => 'Seleziona', 
					'conducente' => 'airbag conducente', 
					'anteriori' => 'airbag anteriori', 
					'anteriori e laterali' => 'airbag anteriori e laterali', 
					'anteriori e laterali e di altro tipo' => 'airbag anteriori - laterali - di altro tipo',
					), ($car!=='create' ? $characteristics->airbag : null), array('class' => 'form-control')) !!}					
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('immobilizer', 1, ($car!=='create' ? $characteristics->immobilizer : false) , '') !!}
			{!! Form::label('immobilizer') !!}
		</td>
		<td>
			{!! Form::checkbox('isofix', 1, ($car!=='create' ? $characteristics->isofix : false) , '') !!}
			{!! Form::label('isofix') !!}
		</td>
		<td>
			{!! Form::checkbox('fog_lights', 1, ($car!=='create' ? $characteristics->fog_lights : false) , '') !!}
			{!! Form::label('fog_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('rain_sensor', 1, ($car!=='create' ? $characteristics->rain_sensor : false) , '') !!}
			{!! Form::label('rain_sensor') !!}
		</td>
		<td>
			{!! Form::checkbox('daytime_running_lights', 1, ($car!=='create' ? $characteristics->daytime_running_lights : false) , '') !!}
			{!! Form::label('daytime_running_lights') !!}
		</td>
		<td>
			{!! Form::checkbox('xenon_lights', 1, ($car!=='create' ? $characteristics->xenon_lights : false) , '') !!}
			{!! Form::label('xenon_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('traction_integral', 1, ($car!=='create' ? $characteristics->traction_integral : false) , '') !!}
			{!! Form::label('traction_integral') !!}
		</td>
		<td>
			{!! Form::checkbox('esp', 1, ($car!=='create' ? $characteristics->esp : false) , '') !!}
			{!! Form::label('esp') !!}
		</td>
		<td>
			{!! Form::checkbox('adaptive_lights', 1, ($car!=='create' ? $characteristics->adaptive_lights : false) , '') !!}
			{!! Form::label('adaptive_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('light_sensor', 1, ($car!=='create' ? $characteristics->light_sensor : false) , '') !!}
			{!! Form::label('light_sensor') !!}
		</td>
		<td>
			{!! Form::checkbox('filter_antiparticles', 1, ($car!=='create' ? $characteristics->filter_antiparticles : false) , '') !!}
			{!! Form::label('filter_antiparticles') !!}
		</td>
		<td>
			{!! Form::checkbox('start_stop_system', 1, ($car!=='create' ? $characteristics->start_stop_system : false) , '') !!}
			{!! Form::label('start_stop_system') !!}
		</td>
</tr>
<tr>
		<td>	
			{!! Form::checkbox('servo', 1, ($car!=='create' ? $characteristics->servo : false) , '') !!}		
			{!! Form::label('servo') !!}			
		</td>
		<td>			
			{!! Form::checkbox('traction_control', 1, ($car!=='create' ? $characteristics->traction_control : false) , '') !!}
			{!! Form::label('traction_control') !!}
		</td>
		<td>
			{!! Form::checkbox('abs', 1, ($car!=='create' ? $characteristics->abs : false) , '') !!}
			{!! Form::label('abs') !!}			
		</td>
</tr>
</table>
<h4>Options:</h4>
<table class="table table-condensed">
<tr>			
		<td>		
			{!! Form::checkbox('access_handicapped', 1, ($car!=='create' ? $characteristics->access_handicapped : false) , '') !!}
			{!! Form::label('access_handicapped') !!}
		</td>
		<td>		
			{!! Form::checkbox('taxi', 1, ($car!=='create' ? $characteristics->taxi : false) , '') !!}
			{!! Form::label('taxi') !!}
		</td>
		<td>
	
			{!! Form::checkbox('guarantee', 1, ($car!=='create' ? $characteristics->guarantee : false) , '') !!}
			{!! Form::label('guarantee') !!}
		</td>
</tr>
<tr>
		<td>				
			{!! Form::checkbox('service_booklet', 1, ($car!=='create' ? $characteristics->service_booklet : false) , '') !!}
			{!! Form::label('service_booklet') !!}
		</td>
		<td>			
			{!! Form::checkbox('non_smoking', 1, ($car!=='create' ? $characteristics->non_smoking : false) ) !!}
			{!! Form::label('non_smoking') !!}	
		</td>
		<td><!--pladeholding space-->			
		</td>
</tr>
</table>
</div>