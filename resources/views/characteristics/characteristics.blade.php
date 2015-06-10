{!! Form::open(array('route' => 'characteristics.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::checkbox('airco') !!}Airco		
		</li>
		<li>
			{!! Form::checkbox('park_sensors') !!}Park_sensors
		</li>
		<li>
			{!! Form::checkbox('seats_number') !!}Seats_number
		</li>
		<li>
			{!! Form::checkbox('internal_design') !!}Internal_design
		</li>
		<li>
			{!! Form::checkbox('internal_color') !!}Internal_color
		</li>
		<li>
			{!! Form::checkbox('bluetooth') !!}Bluetooth
		</li>
		<li>
			{!! Form::checkbox('cd_player') !!}Cd_player
		</li>
		<li>
			{!! Form::checkbox('electrically_adjustable_seats') !!}Electrically_adjustable_seats
		</li>
		<li>
			{!! Form::checkbox('display_headup') !!}Display_headup
		</li>
		<li>
			{!! Form::checkbox('multifunction_assistent') !!}Multifunction_assistent
		</li>
		<li>
			{!! Form::checkbox('panoramic_view') !!}Panoramic_view
		</li>
		<li>
			{!! Form::checkbox('ski_bag') !!}Ski_bag
		</li>
		<li>
			{!! Form::checkbox('auxiliary_heating') !!}Auxiliary_heating
		</li>
		<li>
			{!! Form::checkbox('radio_system') !!}Radio_system
		</li>
		<li>
			{!! Form::checkbox('on_board_computer') !!}On_board_computer
		</li>
		<li>
			{!! Form::checkbox('electric_windows') !!}Electric_windows
		</li>
		<li>
			{!! Form::checkbox('handsfree_kit') !!}Handsfree_kit
		</li>
		<li>
			{!! Form::checkbox('interface_mp3') !!}Interface_mp3
		</li>
		<li>
			{!! Form::checkbox('navigation') !!}Navigation
		</li>
		<li>
			{!! Form::checkbox('convertible_roof') !!}Convertible_roof
		</li>
		<li>
			{!! Form::checkbox('seat_heating') !!}Seat_heating
		</li>
		<li>
			{!! Form::checkbox('sporttype_seats') !!}Sporttype_seats
		</li>
		<li>
			{!! Form::checkbox('cruise_control') !!}Cruise_control
		</li>
		<li>
			{!! Form::checkbox('central_door_lock') !!}Central_door_lock
		</li>
		<li>
			{!! Form::checkbox('tow_bar') !!}Tow_bar
		</li>
		<li>
			{!! Form::checkbox('alloy_wheels') !!}Alloy_wheels
		</li>
		<li>
			{!! Form::checkbox('roof_rack') !!}Roof_rack
		</li>
		<li>
			{!! Form::checkbox('sport_suspension') !!}Sport_suspension
		</li>
		<li>
			{!! Form::checkbox('electronic_side_windows') !!}Electronic_side_windows
		</li>
		<li>
			{!! Form::checkbox('sport_package') !!}Sport_package
		</li>
		<li>
			{!! Form::checkbox('class_emission') !!}Class_emission
		</li>
		<li>
			{!! Form::checkbox('airbag') !!}Airbag
		</li>
		<li>
			{!! Form::checkbox('abs') !!}Abs
		</li>
		<li>
			{!! Form::checkbox('immobilizer') !!}Immobilizer
		</li>
		<li>
			{!! Form::checkbox('isofix') !!}Isofix
		</li>
		<li>
			{!! Form::checkbox('fog_lights') !!}Fog_lights
		</li>
		<li>
			{!! Form::checkbox('rain_sensor') !!}Rain_sensor
		</li>
		<li>
			{!! Form::checkbox('daytime_running_lights') !!}Daytime_running_lights
		</li>
		<li>
			{!! Form::checkbox('xenon_lights') !!}Xenon_lights
		</li>
		<li>
			{!! Form::checkbox('traction_integral') !!}Traction_integral
		</li>
		<li>
			{!! Form::checkbox('esp') !!}Esp
		</li>
		<li>
			{!! Form::checkbox('adaptive_lights') !!}Adaptive_lights
		</li>
		<li>
			{!! Form::checkbox('light_sensor') !!}Light_sensor
		</li>
		<li>
			{!! Form::checkbox('filter_antiparticles') !!}Filter_antiparticles
		</li>
		<li>
			{!! Form::checkbox('start_stop_system') !!}Start_stop_system
		</li>
		<li>
			{!! Form::checkbox('traction_control') !!}Traction_control
		</li>
		<li>
			{!! Form::checkbox('access_handicapped') !!}Access_handicapped
		</li>
		<li>
			{!! Form::checkbox('taxi') !!}Taxi
		</li>
		<li>
			{!! Form::checkbox('guarantee') !!}Guarantee
		</li>
		<li>
			{!! Form::checkbox('service_booklet') !!}Service_booklet
		</li>
		<li>
			{!! Form::checkbox('non_smoking') !!}Non_smoking
		</li>		<li>
			{!! Form::submit() !!}

	</ul>
{!! Form::close() !!}