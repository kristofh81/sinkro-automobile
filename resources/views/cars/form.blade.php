			<div class="form-group row">
			<h3>Dati e descrizione del veicolo</h3>
				<div class='col-md-6'>
					{!! Form::label('Categoria: *') !!}
					{!! Form::select('category', array(
					'0' => 'Seleziona',
					'Usato' => 'Usato',
					'Nuovo' => 'Nuovo',
					), null , array('class' => 'form-control')) !!}
				</div>
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-4'>
					@include('cars.form-partials.marks')
				</div>
				<div class='col-md-4'>
					
					@include('cars.form-partials.models')
				</div>
				<div class='col-md-4'>
					
					@include('cars.form-partials.versions')
				</div>			
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-6'>
					@include('cars.form-partials.types')
				</div>	
				
				<div class='col-md-6'>
					{!! Form::label('mileage', 'Chilometraggio: *') !!}
						<div class="input-group">
                        	<span class="input-group-addon">Km</span>
					{!! Form::text('mileage', null, array('class' => 'form-control')) !!}
						</div>
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('potency', 'Potenza:') !!}
						<div class="input-group">
                        	<span class="input-group-addon">kW</span>
							{!! Form::text('potency', null, array('class' => 'form-control')) !!}
							</div>
				</div>
				<div class='col-md-4'>
					{!! Form::label('gears', 'Cambio:') !!}
					{!! Form::select('gears', array(
					'0' => 'Seleziona',
					'Manuale' => 'Manuale',
					'Automatico' => 'Automatico',
					'Semi-automatico' => 'Semi-automatico',
					), null, array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('doors', 'Numero di porte:') !!}
					{!! Form::select('doors', array(
					'0' => 'Seleziona',
					'2 o 3' => '2 o 3',
					'4 o 5' => '4 o 5',
					'6 o 7' => '6 o 7',
					), null, array('class' => 'form-control')) !!}
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					@include('cars.form-partials.fuel_types')
				</div>
				<div class='col-md-4'>
					{!! Form::label('cilinders', 'Cilindrata:') !!}
					<div class=" input-group">
						<span class="input-group-addon"><em>ccm</em></span>
						{!! Form::text('cilinders', null, array('class' => 'form-control')) !!}
					</div>
				</div>
			</div>

			<div class="form-group row">				
					{!! Form::label('colors_id', 'Colori:') !!}
					@include('cars.form-partials.colors')								
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('immatriculation_date', 'Immatricolazione: *') !!}
					{!! Form::select('immatriculation_date_month', array( 
					'01' => 'Gennaio','02' => 'Febbraio','03' => 'Marzo','04' => 'Aprile','05' => 'Maggio','06' => 'Giugno','07' => 'Luglio','08' => 'Agosto','09' => 'Settembre','10' => 'Ottobre','11' => 'Novembre','12' => 'Dicembre',
					) , null, array('class' => 'form-control')) !!}
										
					{!! Form::selectYear('immatriculation_date_year', date("Y"), 1900, null, array('class' => 'form-control')) !!}					
				</div>   
				
				<div class='col-md-8'>
					{!! Form::label('nations_id', 'Per quale paese e stato prodotto il veicolo?: *') !!}
					@include('cars.form-partials.nations')
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('revision_expiry_date', 'Scadenza revisione:') !!}
					{!! Form::text('revision_expiry_date', ($carcheck==='create' ? date('d/m/Y') : null) , 
		                    array(
		                          'class'=>'form-control calendar', 
		                          'placeholder'=> 'gg/mm/aaaa')) !!}
				</div>		
				<div class='col-md-4'>
					{!! Form::label('bollino_blu_expiry_date', 'Scadenza bollino blu:') !!}
					{!! Form::text('bollino_blu_expiry_date', ($carcheck==='create' ? date('d/m/Y') : null) , 
		                    array(
		                          'class'=>'form-control calendar', 
		                          'placeholder'=> 'gg/mm/aaaa')) !!}
				</div>
				<div class='col-md-2'>
					{!! Form::checkbox('toberevised' ) !!}
					{!! Form::label('torevised', 'Nuova revisione') !!}
				</div>	
			</div>									
		<hr>
			<div class="form-group row ">		
				<div class='col-md-4'>
					{!! Form::label('total_owners', 'Numero di proprietari precedenti:') !!}
					{!! Form::text('total_owners', null, array('class' => 'form-control')) !!}
				</div>				
			</div>
		<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('accident_history', 'Veicolo incidentato: *') !!}
					{!! Form::select('accident_history', array(
					'0' => 'Seleziona', 
					'NonIncidentato' => 'Non incidentato', 
					'Incidentato' => 'Incidentato'), null, array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::checkbox('travel_ability') !!}
					{!! Form::label('travel_ability', ' In grado di viaggiare') !!}
				</div>					
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('insert_code', 'Codice inserzione:') !!}
					{!! Form::text('insert_code', null, array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('vin', 'Numero di identificazione del veicolo (VIN):') !!}
					{!! Form::text('vin', null, array('class' => 'form-control')) !!}
				</div>
			</div>
		<hr>	
			<div class="form-group row">
				<h3>Emissioni e consumo energetico</h3>
					@include('cars.form-partials.consumptionemissions')
				
			</div>
		<hr>	
			<div class="form-group row">
				<h3>Caratteristiche</h3>
					@include('cars.form-partials.characteristics')
			</div>
		<hr>		
			<div class="form-group row">
				<h3>Descrizione</h3>	
				<div class='col-md-12'>
					{!! Form::label('description', 'Descrizione:') !!}
					{!! Form::textarea('description', null, array('class' => 'form-control', 'rows'=>'8', 'cols'=>'20')) !!}
				</div>
			</div>
		<hr>
			<div class="form-group row">
				<h3>Disponibilità</h3>	
				<div class='col-md-4'>
					{!! Form::label('availability_period', 'Disponibilità:') !!}
					{!! Form::text('availability_period', date('d/m/Y'), 
		                    array(
		                          'class'=>'form-control calendar', 
		                          'id'=>'')) !!}
				</div>				
			</div>
		<hr>
			<div class="form-group row">
			<h3>Prezzo</h3>
				<div class='col-md-4'>
				{!! Form::label('price', 'Prezzo: *') !!}
					<div class=" input-group">
                        <span class="input-group-addon">€</span>		
							{!! Form::text('price', null, array('class' => 'form-control')) !!}					
					</div>
				</div>
				<div class='col-md-4'>
					{!! Form::label('price_b2b', 'Prezzo rivenditori:') !!}
					<div class=" input-group">
                        <span class="input-group-addon">€</span>
							{!! Form::text('price_b2b', null, array('class' => 'form-control')) !!}
					</div>
				</div>
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('publish_flag', 'Pubblica:') !!}
					{!! Form::checkbox('publish_flag', true , array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('reserved_flag', 'Reserva:') !!}
					{!! Form::checkbox('reserved_flag') !!}
				</div>
			</div>
		