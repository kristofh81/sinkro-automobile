
<div class="table-responsive">
<h4>Comfort e interni:</h4>
<table class="table table-condensed">
<tr>	
		<td>
			{!! Form::label('Climatizzatore:') !!}
			{!! Form::select('airco', array(
					'0' => 'Seleziona',
					'Manuale o automatico' => 'Manuale o automatico',
					'Automatico' => 'Automatico',
					'Senza climatizzatore' => 'Senza climatizzatore',
					), ($carcheck!=='create' ? $characteristics->airco : null), array('class' => 'form-control')) !!}
		</td>
		<td>
			{!! Form::label('Numero posti:') !!}
			{!! Form::select('seats_number', array(
					'0' => 'Seleziona',
					'1' => '1 - 2',
					'2' => '3 - 6',
					'3' => '> 6',
					), ($carcheck!=='create' ? $characteristics->seats_number : null), array('class' => 'form-control')) !!}
		</td>
		<td><!--pladeholding space--></td>
</tr>
<tr>
		<td>
			{!! Form::label('Design interni:') !!}
			{!! Form::select('internal_design', array(
					'0' => 'Seleziona',
					'Alcantara' => 'Alcantara',
					'Pelle integrale' => 'Pelle integrale',
					'Pelle parziale' => 'Pelle parziale',
					'Stoffa' => 'Stoffa',
					'Velour' => 'Velour',
					'Altro' => 'Altro',
					), ($carcheck!=='create' ? $characteristics->internal_design : null) , array('class' => 'form-control')) !!}
		</td>
		<td>
			{!! Form::label('Colore interni:') !!}
			{!! Form::select('internal_color', array(
					'0' => 'Seleziona',
					'Beige' => 'Beige',
					'Grigio' => 'Grigio',
					'Marrone' => 'Marrone',
					'Nero' => 'Nero',
					'Altro' => 'Altro',
					), ($carcheck!=='create' ? $characteristics->internal_color : null) , array('class' => 'form-control')) !!}
		</td>
		<td><!--pladeholding space-->
		</td>
</tr>
<tr>
		
		<td>
			{!! Form::checkbox('park_sensors', 1, ($carcheck!=='create' ? $characteristics->internal_color : false) , '') !!}
			{!! Form::label(' Sensori parcheggio') !!}
		</td>
		<td>
			{!! Form::checkbox('bluetooth',  1, ($carcheck!=='create' ? $characteristics->bluetooth : false) , '') !!}
			{!! Form::label(' Bluetooth') !!}
		</td>
		<td>
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('cd_player', 1, ($carcheck!=='create' ? $characteristics->cd_player : false) , '') !!}
			{!! Form::label(' Lettore CD') !!}
		</td>
		<td>
			{!! Form::checkbox('electrically_adjustable_seats', 1, ($carcheck!=='create' ? $characteristics->electrically_adjustable_seats : false) , '') !!}
			{!! Form::label(' Regolazione elettrica del sedile') !!}
		</td>
		<td>
			{!! Form::checkbox('display_headup', 1, ($carcheck!=='create' ? $characteristics->display_headup : false) , '') !!}
			{!! Form::label(' Display head-up') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('multifunction_assistent', 1, ($carcheck!=='create' ? $characteristics->multifunction_assistent : false) , '') !!}
			{!! Form::label(' Volante multifunzione') !!}
		</td>
		<td>
			{!! Form::checkbox('panoramic_view', 1, ($carcheck!=='create' ? $characteristics->panoramic_view : false) , '') !!}
			{!! Form::label(' Tettuccio panoramico in vetro') !!}
		</td>
		<td>
			{!! Form::checkbox('ski_bag', 1, ($carcheck!=='create' ? $characteristics->ski_bag : false) , '') !!}
			{!! Form::label(' Sacca per sci') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('auxiliary_heating', 1, ($carcheck!=='create' ? $characteristics->auxiliary_heating : false) , '') !!}
			{!! Form::label(' Riscaldamento ausiliario') !!}
		</td>
		<td>
			{!! Form::checkbox('radio_system', 1, ($carcheck!=='create' ? $characteristics->radio_system : false) , '') !!}
			{!! Form::label(' Sintonizzatorre/Radio') !!}
		</td>
		<td>
			{!! Form::checkbox('on_board_computer', 1, ($carcheck!=='create' ? $characteristics->on_board_computer : false) , '') !!}
			{!! Form::label(' Computer di bordo') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('electric_windows', 1, ($carcheck!=='create' ? $characteristics->electric_windows : false) , '') !!}
			{!! Form::label(' Alzacristalli elettrico') !!}
		</td>
		<td>
			{!! Form::checkbox('handsfree_kit', 1, ($carcheck!=='create' ? $characteristics->handsfree_kit : false) , '') !!}
			{!! Form::label(' Kit vivavoce') !!}
		</td>
		<td>
			{!! Form::checkbox('interface_mp3', 1, ($carcheck!=='create' ? $characteristics->interface_mp3 : false) , '') !!}
			{!! Form::label(' Interfaccia mp3') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('navigation', 1, ($carcheck!=='create' ? $characteristics->navigation : false) , '') !!}
			{!! Form::label(' Navigazione satellitare') !!}
		</td>
		<td>
			{!! Form::checkbox('convertible_roof', 1, ($carcheck!=='create' ? $characteristics->convertible_roof : false) , '') !!}
			{!! Form::label(' Tettuccio apribile') !!}
		</td>
		<td>
			{!! Form::checkbox('seat_heating', 1, ($carcheck!=='create' ? $characteristics->seat_heating : false) , '') !!}
			{!! Form::label(' Sedili riscaldati') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sporttype_seats', 1, ($carcheck!=='create' ? $characteristics->sporttype_seats : false) , '') !!}
			{!! Form::label(' Sedili sportivi') !!}
		</td>
		<td>
			{!! Form::checkbox('cruise_control', 1, ($carcheck!=='create' ? $characteristics->cruise_control : false) , '') !!}
			{!! Form::label(' Cruise Control') !!}
		</td>
		<td>
			{!! Form::checkbox('central_door_lock', 1, ($carcheck!=='create' ? $characteristics->central_door_lock : false) , '') !!}
			{!! Form::label(' Chiusira centralizzata') !!}
		</td>
</tr>
</table>
<h4>Caratteristiche esterne:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::checkbox('tow_bar', 1, ($carcheck!=='create' ? $characteristics->tow_bar : false) , '') !!}
			{!! Form::label(' Gancio traino') !!}
		</td>
		<td>
			{!! Form::checkbox('alloy_wheels', 1, ($carcheck!=='create' ? $characteristics->alloy_wheels : false) , '') !!}
			{!! Form::label(' Cerchi in lega') !!}
		</td>
		<td>
			{!! Form::checkbox('roof_rack', 1, ($carcheck!=='create' ? $characteristics->roof_rack : false) , '') !!}
			{!! Form::label(' Portabagagli a tetto') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('sport_suspension', 1, ($carcheck!=='create' ? $characteristics->sport_suspension : false) , '') !!}
			{!! Form::label(' Sospensione sportiva') !!}
		</td>
		<td>
			{!! Form::checkbox('electronic_side_windows', 1, ($carcheck!=='create' ? $characteristics->electronic_side_windows : false) , '') !!}
			{!! Form::label(' Speccchietto laterale elettrico') !!}
		</td>
		<td>
			{!! Form::checkbox('sport_package', 1, ($carcheck!=='create' ? $characteristics->sport_package : false) , '') !!}
			{!! Form::label(' Pachetto sport') !!}
		</td>
</tr>
</table>
<h4>Sicurezza e ambiente:</h4>
<table class="table table-condensed">
<tr>
		<td>
			{!! Form::label('Classa emissioni:') !!}
			{!! Form::select('class_emission', array(
					'0' => 'Seleziona', 
					'euro1' => 'euro1', 
					'euro2' => 'euro2', 
					'euro3' => 'euro3', 
					'euro4' => 'euro4', 
					'euro5' => 'euro5', 
					'euro6' => 'euro6'), ($carcheck!=='create' ? $characteristics->class_emission : null), array('class' => 'form-control')) !!}
		
		</td>
		<td>
			{!! Form::label('Airbag:') !!}
			{!! Form::select('airbag', array(
					'0' => 'Seleziona', 
					'conducente' => 'airbag conducente', 
					'anteriori' => 'airbag anteriori', 
					'anteriori e laterali' => 'airbag anteriori e laterali', 
					'anteriori e laterali e di altro tipo' => 'airbag anteriori - laterali - di altro tipo',
					), ($carcheck!=='create' ? $characteristics->airbag : null), array('class' => 'form-control')) !!}					
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('immobilizer', 1, ($carcheck!=='create' ? $characteristics->immobilizer : false) , '') !!}
			{!! Form::label(' Antifurto immobilizer') !!}
		</td>
		<td>
			{!! Form::checkbox('isofix', 1, ($carcheck!=='create' ? $characteristics->isofix : false) , '') !!}
			{!! Form::label(' Isofix (punti di ancoraggio seggiolino per bambini)') !!}
		</td>
		<td>
			{!! Form::checkbox('fog_lights', 1, ($carcheck!=='create' ? $characteristics->fog_lights : false) , '') !!}
			{!! Form::label(' Fendinebbia') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('rain_sensor', 1, ($carcheck!=='create' ? $characteristics->rain_sensor : false) , '') !!}
			{!! Form::label(' Sensore di pioggia') !!}
		</td>
		<td>
			{!! Form::checkbox('daytime_running_lights', 1, ($carcheck!=='create' ? $characteristics->daytime_running_lights : false) , '') !!}
			{!! Form::label(' Luci diurne') !!}
		</td>
		<td>
			{!! Form::checkbox('xenon_lights', 1, ($carcheck!=='create' ? $characteristics->xenon_lights : false) , '') !!}
			{!! Form::label(' Fari xenon') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('traction_integral', 1, ($carcheck!=='create' ? $characteristics->traction_integral : false) , '') !!}
			{!! Form::label(' Trazione integral') !!}
		</td>
		<td>
			{!! Form::checkbox('esp', 1, ($carcheck!=='create' ? $characteristics->esp : false) , '') !!}
			{!! Form::label(' ESP') !!}
		</td>
		<td>
			{!! Form::checkbox('adaptive_lights', 1, ($carcheck!=='create' ? $characteristics->adaptive_lights : false) , '') !!}
			{!! Form::label(' Illuminazione adattativa') !!}
		</td>
</tr>
<tr>
		<td>
			{!! Form::checkbox('light_sensor', 1, ($carcheck!=='create' ? $characteristics->light_sensor : false) , '') !!}
			{!! Form::label(' Sensore di luce') !!}
		</td>
		<td>
			{!! Form::checkbox('filter_antiparticles', 1, ($carcheck!=='create' ? $characteristics->filter_antiparticles : false) , '') !!}
			{!! Form::label(' Filtro antiparticolato') !!}
		</td>
		<td>
			{!! Form::checkbox('start_stop_system', 1, ($carcheck!=='create' ? $characteristics->start_stop_system : false) , '') !!}
			{!! Form::label(' Sistema start & stop') !!}
		</td>
</tr>
<tr>
		<td>	
			{!! Form::checkbox('servo', 1, ($carcheck!=='create' ? $characteristics->servo : false) , '') !!}		
			{!! Form::label(' Servosterzo') !!}			
		</td>
		<td>			
			{!! Form::checkbox('traction_control', 1, ($carcheck!=='create' ? $characteristics->traction_control : false) , '') !!}
			{!! Form::label(' Controlle trazione') !!}
		</td>
		<td>
			{!! Form::checkbox('abs', 1, ($carcheck!=='create' ? $characteristics->abs : false) , '') !!}
			{!! Form::label(' ABS') !!}			
		</td>
</tr>
</table>
<h4>Options:</h4>
<table class="table table-condensed">
<tr>			
		<td>		
			{!! Form::checkbox('access_handicapped', 1, ($carcheck!=='create' ? $characteristics->access_handicapped : false) , '') !!}
			{!! Form::label(' Accesso disabili') !!}
		</td>
		<td>		
			{!! Form::checkbox('taxi', 1, ($carcheck!=='create' ? $characteristics->taxi : false) , '') !!}
			{!! Form::label(' Taxi') !!}
		</td>
		<td>
	
			{!! Form::checkbox('guarantee', 1, ($carcheck!=='create' ? $characteristics->guarantee : false) , '') !!}
			{!! Form::label(' Garanzia') !!}
		</td>
</tr>
<tr>
		<td>				
			{!! Form::checkbox('service_booklet', 1, ($carcheck!=='create' ? $characteristics->service_booklet : false) , '') !!}
			{!! Form::label(' Libretto manutenzioni') !!}
		</td>
		<td>			
			{!! Form::checkbox('non_smoking', 1, ($carcheck!=='create' ? $characteristics->non_smoking : false) ) !!}
			{!! Form::label(' Veicolo per non fumatori') !!}	
		</td>
		<td><!--pladeholding space-->			
		</td>
</tr>
</table>
</div>