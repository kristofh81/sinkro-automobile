			<div class="form-group row">
				<div class='col-md-6'>
					{!! Form::label('categories_id', 'Categories_id: *') !!}
					{!! Form::select('category', array(
					'0' => 'Seleziona',
					'1' => 'Usato',
					'2' => 'Nuovo',
					), 'key', array('class' => 'form-control')) !!}
				</div>
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-4'>
					@include('cars.form-partials.marks')
				</div>
				<div class='col-md-4'>
					{!! Form::label('models_id', 'Models_id:', array()) !!}
					@include('cars.form-partials.models')
				</div>
				<div class='col-md-4'>
					{!! Form::label('versions_id', 'Versions_id:', array()) !!}
					@include('cars.form-partials.versions')
				</div>			
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-6'>
					@include('cars.form-partials.types')
				</div>	
				
				<div class='col-md-6'>
					{!! Form::label('mileage', 'Mileage: *') !!}
						<div class="input-group">
                        	<span class="input-group-addon">Km</span>
					{!! Form::text('mileage', null, array('class' => 'form-control')) !!}
						</div>
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('potency', 'Potency:') !!}
						<div class="input-group">
                        	<span class="input-group-addon">kW</span>
							{!! Form::text('potency', null, array('class' => 'form-control')) !!}
							</div>
				</div>
				<div class='col-md-4'>
					{!! Form::label('gears', 'gears:') !!}
					{!! Form::select('gears', array(
					'0' => 'Seleziona',
					'1' => 'Manuale',
					'2' => 'Automatico',
					'3' => 'Semi-automatico',
					), 'key', array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('doors', 'Doors:') !!}
					{!! Form::select('doors', array(
					'0' => 'Seleziona',
					'1' => '2 o 3',
					'2' => '4 o 5',
					'3' => '6 o 7',
					), 'key', array('class' => 'form-control')) !!}
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('fuel_types_id', 'Fuel_types_id:') !!}
					@include('cars.form-partials.fuel_types')
				</div>
				<div class='col-md-4'>
					{!! Form::label('cilinders', 'Cilinders:') !!}
					{!! Form::text('cilinders', null, array('class' => 'form-control')) !!}
				</div>
			</div>

			<div class="form-group row">				
					{!! Form::label('colors_id', 'Colori:') !!}
					@include('cars.form-partials.colors')								
			</div>
		<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('immatriculation_date', 'immatriculation_date:') !!}
					{!! Form::selectMonth('immatriculation_date_month' , null, array('class' => 'form-control')) !!}
										
					{!! Form::selectYear('immatriculation_date_year', date("Y"), 1900, null, array('class' => 'form-control')) !!}					
				</div>   
				
				<div class='col-md-8'>
					{!! Form::label('nations_id', 'Per quale paese e stato prodotto il veicolo?:') !!}
					@include('cars.form-partials.nations')
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('revision_expiry_date', 'Revision_expiry_date:') !!}
					{!! Form::text('revision_expiry_date', null, 
		                    array(
		                          'class'=>'form-control calendar', 
		                          'id'=>'')) !!}
				</div>		
				<div class='col-md-4'>
					{!! Form::label('bollino_blu_expiry_date', 'Bollino_blu_expiry_date:') !!}
					{!! Form::text('bollino_blu_expiry_date', null, 
		                    array(
		                          'class'=>'form-control calendar', 
		                          'id'=>'')) !!}
				</div>
				<div class='col-md-2'>
					{!! Form::label('torevised', 'toberevised:') !!}
					{!! Form::checkbox('toberevised' ) !!}
				</div>	
			</div>									
		<hr>
			<div class="form-group row ">		
				<div class='col-md-4'>
					{!! Form::label('total_owners', 'Total_owners:') !!}
					{!! Form::text('total_owners', null, array('class' => 'form-control')) !!}
				</div>				
			</div>
		<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('accident_history', 'Accident_history: *') !!}
					{!! Form::select('accident_history', array(
					'0' => 'Seleziona', 
					'1' => 'Non incidentata', 
					'2' => 'Incidentata'), null, array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('travel_ability', 'Travel_ability:') !!}
					{!! Form::checkbox('travel_ability') !!}
				</div>					
			</div>
		<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('insert_code', 'Insert_code:') !!}
					{!! Form::text('insert_code', null, array('class' => 'form-control')) !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('vin', 'Vin:') !!}
					{!! Form::text('vin', null, array('class' => 'form-control')) !!}
				</div>
			</div>
		<hr>		
			<div class="form-group row">
				<h3>Disponibilità</h3>	
				<div class='col-md-4'>
					{!! Form::label('availability_period', 'Availability_period:') !!}
					{!! Form::text('availability_period', null, 
		                    array(
		                          'class'=>'form-control calendar', 
		                          'id'=>'')) !!}
				</div>				
			</div>
		<hr>

			<div class="form-group row">
				<h3>Emissioni e consumo energetico</h3>
					{!! Form::label('consumptionemissions_id', 'Consumptionemissions_id:') !!}
					{!! Form::hidden('consumptionemissions_id', 1) !!}
					@include('cars.form-partials.consumptionemissions')
				
			</div>
		<hr>	
			<div class="form-group row">

					@include('cars.form-partials.characteristics')

			</div>
		<hr>		

			<div class="form-group row">
				<h3>Descrizione</h3>	
				<div class='col-md-12'>
					{!! Form::label('description', 'Description:') !!}
					{!! Form::textarea('description', null, array('class' => 'form-control', 'rows'=>'8', 'cols'=>'20')) !!}
				</div>
			</div>
		<hr>		

			<div class="form-group row">
				<div class='col-md-4'>
				{!! Form::label('price', 'Price: *') !!}
					<div class=" input-group">
                        <span class="input-group-addon">€</span>		
							{!! Form::text('price', null, array('class' => 'form-control')) !!}					
					</div>
				</div>
				<div class='col-md-4'>
					{!! Form::label('price_b2b', 'Price_b2b:') !!}
					<div class=" input-group">
                        <span class="input-group-addon">€</span>
							{!! Form::text('price_b2b', null, array('class' => 'form-control')) !!}
					</div>
				</div>
			</div>
			<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('publish_flag', 'Publish_flag:') !!}
					{!! Form::checkbox('publish_flag') !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('reserved_flag', 'Reserved_flag:') !!}
					{!! Form::checkbox('reserved_flag') !!}
				</div>
			</div>
			<hr>			


