			<div class="form-group row">
				<div class='col-md-6'>
					{!! Form::label('categories_id', 'Categories_id:') !!}
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
					{!! Form::label('mark_id', 'Mark_id:', array()) !!}
					@include('marks')
				</div>
				<div class='col-md-4'>
					{!! Form::label('models_id', 'Models_id:', array()) !!}
					@include('models')
				</div>
				<div class='col-md-4'>
					{!! Form::label('versions_id', 'Versions_id:', array()) !!}
					@include('versions')
				</div>			
			</div>
		<hr>
			<div class="form-group row">
				<div class='col-md-6'>
					{!! Form::label('type', 'Type:') !!}
					@include('types')
				</div>	
				
				<div class='col-md-6'>
					{!! Form::label('mileage', 'Mileage:') !!}
					{!! Form::text('mileage', null, array('class' => 'form-control')) !!}
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('potency', 'Potency:') !!}
					{!! Form::text('potency', null, array('class' => 'form-control')) !!} <em>in kW</em>
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
					@include('fuel_types')
				</div>
				<div class='col-md-4'>
					{!! Form::label('cilinders', 'Cilinders:') !!}
					{!! Form::text('cilinders', null, array('class' => 'form-control')) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class='col-md-8'>
					{!! Form::label('colors_id', 'Colors_id:') !!}
					@include('colors')
				</div>				
			</div>
		<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('immatriculation_date', 'immatriculation_date:') !!}<br>
					{!! Form::text('immatriculation_date', null , 
						array('class' => 'form-control calendar-past')); !!}					
				</div>  
				
				<div class='col-md-8'>
					{!! Form::label('nations_id', 'Nations_id:') !!}
					{!! Form::text('nations_id') !!}
					@include('nations')
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
				<div class='col-md-8'>
					{!! Form::label('total_owners', 'Total_owners:') !!}
					{!! Form::text('total_owners', null, array('class' => 'form-control')) !!}
				</div>				
			</div>
		<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('accident_history', 'Accident_history:') !!}
					{!! Form::select('accident_history', array(
					'0' => 'Seleziona', 
					'1' => 'senza incidente', 
					'2' => 'incidentata'), 'key', array('class' => 'form-control')) !!}
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
					@include('consumptionemissions')
				
			</div>
			
			<div class="form-group row">
				
					{!! Form::label('characteristics_id', 'Characteristics_id:') !!}
					{!! Form::text('characteristics_id') !!}
				

				<hr>
					@include('characteristics.characteristics')

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
					{!! Form::label('price', 'Price:') !!}
					{!! Form::text('price', null, array('class' => 'form-control')) !!}
					<em>in €</em>
				</div>
				<div class='col-md-4'>
					{!! Form::label('price_b2b', 'Price_b2b:') !!}
					{!! Form::text('price_b2b', null, array('class' => 'form-control')) !!}
					<em>in €</em>
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
				<div class='col-md-4'>
					{!! Form::label('images_id', 'Images_id:') !!}
					{!! Form::text('images_id') !!}
				</div>
			</div>
			<hr>			


