{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('airco', 'Airco:') !!}
			{!! Form::checkbox('airco') !!}
		</li>
		<li>
			{!! Form::label('park_sensors', 'Park_sensors:') !!}
			{!! Form::checkbox('park_sensors') !!}
		</li>
		<li>
			{!! Form::label('seats_number', 'Seats_number:') !!}
			{!! Form::checkbox('seats_number') !!}
		</li>
		<li>
			{!! Form::label('internal_design', 'Internal_design:') !!}
			{!! Form::checkbox('internal_design') !!}
		</li>
		<li>
			{!! Form::label('internal_color', 'Internal_color:') !!}
			{!! Form::checkbox('internal_color') !!}
		</li>
		<li>
			{!! Form::label('bluetooth', 'Bluetooth:') !!}
			{!! Form::checkbox('bluetooth') !!}
		</li>
		<li>
			{!! Form::label('cd_player', 'Cd_player:') !!}
			{!! Form::checkbox('cd_player') !!}
		</li>
		<li>
			{!! Form::label('electrically_adjustable_seats', 'Electrically_adjustable_seats:') !!}
			{!! Form::checkbox('electrically_adjustable_seats') !!}
		</li>
		<li>
			{!! Form::label('display_headup', 'Display_headup:') !!}
			{!! Form::checkbox('display_headup') !!}
		</li>
		<li>
			{!! Form::label('multifunction_assistent', 'Multifunction_assistent:') !!}
			{!! Form::checkbox('multifunction_assistent') !!}
		</li>
		<li>
			{!! Form::label('panoramic_view', 'Panoramic_view:') !!}
			{!! Form::checkbox('panoramic_view') !!}
		</li>
		<li>
			{!! Form::label('ski_bag', 'Ski_bag:') !!}
			{!! Form::checkbox('ski_bag') !!}
		</li>
		<li>
			{!! Form::label('auxiliary_heating', 'Auxiliary_heating:') !!}
			{!! Form::checkbox('auxiliary_heating') !!}
		</li>
		<li>
			{!! Form::label('radio_system', 'Radio_system:') !!}
			{!! Form::checkbox('radio_system') !!}
		</li>
		<li>
			{!! Form::label('on_board_computer', 'On_board_computer:') !!}
			{!! Form::checkbox('on_board_computer') !!}
		</li>
		<li>
			{!! Form::label('electric_windows', 'Electric_windows:') !!}
			{!! Form::checkbox('electric_windows') !!}
		</li>
		<li>
			{!! Form::label('handsfree_kit', 'Handsfree_kit:') !!}
			{!! Form::checkbox('handsfree_kit') !!}
		</li>
		<li>
			{!! Form::label('interface_mp3', 'Interface_mp3:') !!}
			{!! Form::checkbox('interface_mp3') !!}
		</li>
		<li>
			{!! Form::label('navigation', 'Navigation:') !!}
			{!! Form::checkbox('navigation') !!}
		</li>
		<li>
			{!! Form::label('convertible_roof', 'Convertible_roof:') !!}
			{!! Form::checkbox('convertible_roof') !!}
		</li>
		<li>
			{!! Form::label('seat_heating', 'Seat_heating:') !!}
			{!! Form::checkbox('seat_heating') !!}
		</li>
		<li>
			{!! Form::label('sporttype_seats', 'Sporttype_seats:') !!}
			{!! Form::checkbox('sporttype_seats') !!}
		</li>
		<li>
			{!! Form::label('cruise_control', 'Cruise_control:') !!}
			{!! Form::checkbox('cruise_control') !!}
		</li>
		<li>
			{!! Form::label('central_door_lock', 'Central_door_lock:') !!}
			{!! Form::checkbox('central_door_lock') !!}
		</li>
		<li>
			{!! Form::label('tow_bar', 'Tow_bar:') !!}
			{!! Form::checkbox('tow_bar') !!}
		</li>
		<li>
			{!! Form::label('alloy_wheels', 'Alloy_wheels:') !!}
			{!! Form::checkbox('alloy_wheels') !!}
		</li>
		<li>
			{!! Form::label('roof_rack', 'Roof_rack:') !!}
			{!! Form::checkbox('roof_rack') !!}
		</li>
		<li>
			{!! Form::label('sport_suspension', 'Sport_suspension:') !!}
			{!! Form::checkbox('sport_suspension') !!}
		</li>
		<li>
			{!! Form::label('electronic_side_windows', 'Electronic_side_windows:') !!}
			{!! Form::checkbox('electronic_side_windows') !!}
		</li>
		<li>
			{!! Form::label('sport_package', 'Sport_package:') !!}
			{!! Form::checkbox('sport_package') !!}
		</li>
		<li>
			{!! Form::label('class_emission', 'Class_emission:') !!}
			{!! Form::checkbox('class_emission') !!}
		</li>
		<li>
			{!! Form::label('airbag', 'Airbag:') !!}
			{!! Form::checkbox('airbag') !!}
		</li>
		<li>
			{!! Form::label('abs', 'Abs:') !!}
			{!! Form::checkbox('abs') !!}
		</li>
		<li>
			{!! Form::label('immobilizer', 'Immobilizer:') !!}
			{!! Form::checkbox('immobilizer') !!}
		</li>
		<li>
			{!! Form::label('isofix', 'Isofix:') !!}
			{!! Form::checkbox('isofix') !!}
		</li>
		<li>
			{!! Form::label('fog_lights', 'Fog_lights:') !!}
			{!! Form::checkbox('fog_lights') !!}
		</li>
		<li>
			{!! Form::label('rain_sensor', 'Rain_sensor:') !!}
			{!! Form::checkbox('rain_sensor') !!}
		</li>
		<li>
			{!! Form::label('daytime_running_lights', 'Daytime_running_lights:') !!}
			{!! Form::checkbox('daytime_running_lights') !!}
		</li>
		<li>
			{!! Form::label('xenon_lights', 'Xenon_lights:') !!}
			{!! Form::checkbox('xenon_lights') !!}
		</li>
		<li>
			{!! Form::label('traction_integral', 'Traction_integral:') !!}
			{!! Form::checkbox('traction_integral') !!}
		</li>
		<li>
			{!! Form::label('esp', 'Esp:') !!}
			{!! Form::checkbox('esp') !!}
		</li>
		<li>
			{!! Form::label('adaptive_lights', 'Adaptive_lights:') !!}
			{!! Form::checkbox('adaptive_lights') !!}
		</li>
		<li>
			{!! Form::label('light_sensor', 'Light_sensor:') !!}
			{!! Form::checkbox('light_sensor') !!}
		</li>
		<li>
			{!! Form::label('filter_antiparticles', 'Filter_antiparticles:') !!}
			{!! Form::checkbox('filter_antiparticles') !!}
		</li>
		<li>
			{!! Form::label('start_stop_system', 'Start_stop_system:') !!}
			{!! Form::checkbox('start_stop_system') !!}
		</li>
		<li>
			{!! Form::label('traction_control', 'Traction_control:') !!}
			{!! Form::checkbox('traction_control') !!}
		</li>
		<li>
			{!! Form::label('access_handicapped', 'Access_handicapped:') !!}
			{!! Form::checkbox('access_handicapped') !!}
		</li>
		<li>
			{!! Form::label('taxi', 'Taxi:') !!}
			{!! Form::checkbox('taxi') !!}
		</li>
		<li>
			{!! Form::label('guarantee', 'Guarantee:') !!}
			{!! Form::checkbox('guarantee') !!}
		</li>
		<li>
			{!! Form::label('service_booklet', 'Service_booklet:') !!}
			{!! Form::checkbox('service_booklet') !!}
		</li>
		<li>
			{!! Form::label('non_smoking', 'Non_smoking:') !!}
			{!! Form::checkbox('non_smoking') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}