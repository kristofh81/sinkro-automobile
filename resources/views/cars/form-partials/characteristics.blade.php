<h3>Caratteristiche</h3>
<div class="table-responsive">
<h4>Comfort e interni:</h4>
<table class="table table-condensed">
<tr>	
		<td>
			{!! Form::checkbox('airco') !!}
			{!! Form::label('airco') !!}
		</td>
		<td>
			{!! Form::checkbox('park_sensors', 'Park_sensors:') !!}
			{!! Form::label('park_sensors') !!}
		</td>
		<td>
			{!! Form::checkbox('seats_number', 'Seats_number:') !!}
			{!! Form::label('seats_number') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('internal_design', 'Internal_design:') !!}
			{!! Form::label('internal_design') !!}
		</td>
		<td>
			{!! Form::checkbox('internal_color', 'Internal_color:') !!}
			{!! Form::label('internal_color') !!}
		</td>
		<td>
			{!! Form::checkbox('bluetooth', 'Bluetooth:') !!}
			{!! Form::label('bluetooth') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('cd_player', 'Cd_player:') !!}
			{!! Form::label('cd_player') !!}
		</td>
		<td>
			{!! Form::checkbox('electrically_adjustable_seats', 'Electrically_adjustable_seats:') !!}
			{!! Form::label('electrically_adjustable_seats') !!}
		</td>
		<td>
			{!! Form::checkbox('display_headup', 'Display_headup:') !!}
			{!! Form::label('display_headup') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('multifunction_assistent', 'Multifunction_assistent:') !!}
			{!! Form::label('multifunction_assistent') !!}
		</td>
		<td>
			{!! Form::checkbox('panoramic_view', 'Panoramic_view:') !!}
			{!! Form::label('panoramic_view') !!}
		</td>
		<td>
			{!! Form::checkbox('ski_bag', 'Ski_bag:') !!}
			{!! Form::label('ski_bag') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('auxiliary_heating', 'Auxiliary_heating:') !!}
			{!! Form::label('auxiliary_heating') !!}
		</td>
		<td>
			{!! Form::checkbox('radio_system', 'Radio_system:') !!}
			{!! Form::label('radio_system') !!}
		</td>
		<td>
			{!! Form::checkbox('on_board_computer', 'On_board_computer:') !!}
			{!! Form::label('on_board_computer') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('electric_windows', 'Electric_windows:') !!}
			{!! Form::label('electric_windows') !!}
		</td>
		<td>
			{!! Form::checkbox('handsfree_kit', 'Handsfree_kit:') !!}
			{!! Form::label('handsfree_kit') !!}
		</td>
		<td>
			{!! Form::checkbox('interface_mp3', 'Interface_mp3:') !!}
			{!! Form::label('interface_mp3') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('navigation', 'Navigation:') !!}
			{!! Form::label('navigation') !!}
		</td>
		<td>
			{!! Form::checkbox('convertible_roof', 'Convertible_roof:') !!}
			{!! Form::label('convertible_roof') !!}
		</td>
		<td>
			{!! Form::checkbox('seat_heating', 'Seat_heating:') !!}
			{!! Form::label('seat_heating') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sporttype_seats', 'Sporttype_seats:') !!}
			{!! Form::label('sporttype_seats') !!}
		</td>
		<td>
			{!! Form::checkbox('cruise_control', 'Cruise_control:') !!}
			{!! Form::label('cruise_control') !!}
		</td>
		<td>
			{!! Form::checkbox('central_door_lock', 'Central_door_lock:') !!}
			{!! Form::label('central_door_lock') !!}
		</td>
</tr>
</table>
<h4>Caratteristiche esterne:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::checkbox('tow_bar', 'Tow_bar:') !!}
			{!! Form::label('tow_bar') !!}
		</td>
		<td>
			{!! Form::checkbox('alloy_wheels', 'Alloy_wheels:') !!}
			{!! Form::label('alloy_wheels') !!}
		</td>
		<td>
			{!! Form::checkbox('roof_rack', 'Roof_rack:') !!}
			{!! Form::label('roof_rack') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sport_suspension', 'Sport_suspension:') !!}
			{!! Form::label('sport_suspension') !!}
		</td>
		<td>
			{!! Form::checkbox('electronic_side_windows', 'Electronic_side_windows:') !!}
			{!! Form::label('electronic_side_windows') !!}
		</td>
		<td>
			{!! Form::checkbox('sport_package', 'Sport_package:') !!}
			{!! Form::label('sport_package') !!}
		</td>
</tr>
</table>
<h4>Sicurezza e ambiente:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::checkbox('class_emission', 'Class_emission:') !!}
			{!! Form::label('class_emission') !!}
		</td>
		<td>
			{!! Form::checkbox('airbag', 'Airbag:') !!}
			{!! Form::label('airbag') !!}
		</td>
		<td>
			{!! Form::checkbox('abs', 'Abs:') !!}
			{!! Form::label('abs') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('immobilizer', 'Immobilizer:') !!}
			{!! Form::label('immobilizer') !!}
		</td>
		<td>
			{!! Form::checkbox('isofix', 'Isofix:') !!}
			{!! Form::label('isofix') !!}
		</td>
		<td>
			{!! Form::checkbox('fog_lights', 'Fog_lights:') !!}
			{!! Form::label('fog_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('rain_sensor', 'Rain_sensor:') !!}
			{!! Form::label('rain_sensor') !!}
		</td>
		<td>
			{!! Form::checkbox('daytime_running_lights', 'Daytime_running_lights:') !!}
			{!! Form::label('daytime_running_lights') !!}
		</td>
		<td>
			{!! Form::checkbox('xenon_lights', 'Xenon_lights:') !!}
			{!! Form::label('xenon_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('traction_integral', 'Traction_integral:') !!}
			{!! Form::label('traction_integral') !!}
		</td>
		<td>
			{!! Form::checkbox('esp', 'Esp:') !!}
			{!! Form::label('esp') !!}
		</td>
		<td>
			{!! Form::checkbox('adaptive_lights', 'Adaptive_lights:') !!}
			{!! Form::label('adaptive_lights') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('light_sensor', 'light_sensor:') !!}
			{!! Form::label('light_sensor') !!}
		</td>
		<td>
			{!! Form::checkbox('filter_antiparticles', 'Filter_antiparticles:') !!}
			{!! Form::label('filter_antiparticles') !!}
		</td>
		<td>
			{!! Form::checkbox('start_stop_system', 'Start_stop_system:') !!}
			{!! Form::label('start_stop_system') !!}
		</td>
</tr>
<tr>
		<td>	
			{!! Form::checkbox('servo', 'Servosterzo:') !!}		
			{!! Form::label('servo') !!}			
		</td>
		<td>			
			{!! Form::checkbox('traction_control', 'Traction_control:') !!}
			{!! Form::label('traction_control') !!}
		</td>
		<td>			
		</td>
</tr>
</table>
<h4>Options:</h4>
<table class="table table-condensed">
<tr>			
		<td>		
			{!! Form::checkbox('access_handicapped', 'Access_handicapped:') !!}
			{!! Form::label('access_handicapped') !!}
		</td>
		<td>		
			{!! Form::checkbox('taxi', 'Taxi:') !!}
			{!! Form::label('taxi') !!}
		</td>
		<td>
	
			{!! Form::checkbox('guarantee', 'Guarantee:') !!}
			{!! Form::label('guarantee') !!}
		</td>
</tr>
<tr>
		<td>				
			{!! Form::checkbox('service_booklet', 'Service_booklet:') !!}
			{!! Form::label('service_booklet') !!}
		</td>
		<td>			
			{!! Form::checkbox('non_smoking', 'Non_smoking:') !!}
			{!! Form::label('non_smoking') !!}	
		</td>
		<td>			
		</td>
</tr>
</table>
</div>