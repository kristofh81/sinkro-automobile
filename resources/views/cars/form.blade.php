
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
				<div class='col-md-4'>
					{!! Form::label('type', 'Type:') !!}
					@include('types')
				</div>	
				<div class='col-md-4'>
					{!! Form::label('categories_id', 'Categories_id:') !!}
					{!! Form::text('categories_id') !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('mileage', 'Mileage:') !!}
					{!! Form::text('mileage') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('potency', 'Potency:') !!}
					{!! Form::text('potency') !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('gears', 'gears:') !!}
					{!! Form::text('gears') !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('doors', 'Doors:') !!}
					{!! Form::text('doors') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('fuel_types_id', 'Fuel_types_id:') !!}
					{!! Form::text('fuel_types_id') !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('cilinders', 'Cilinders:') !!}
					{!! Form::text('cilinders') !!}
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
				<div class='col-md-6'>
					{!! Form::label('production_date', 'Production_date:') !!}
					{!! Form::selectRange('day', 1, 31); !!}
					{!! Form::selectMonth('month', array('class' => 'form-control')) !!}
					{!! Form::selectYear('year', date('Y'), 1940) !!}  
				</div>
				<div class='col-md-6'>
					{!! Form::label('nations_id', 'Nations_id:') !!}
					{!! Form::text('nations_id') !!}
					@include('nations')
				</div>
			</div>
			<div class="form-group row">
				<div class='col-md-5'>
					{!! Form::label('revision_expiry_date', 'Revision_expiry_date:') !!}
					{!! Form::text('revision_expiry_date', null, 
		                    array(
		                          'class'=>'form-control datepicker', 
		                          'id'=>'')) !!}
				</div>		
				<div class='col-md-5'>
					{!! Form::label('bollino_blu_expiry_date', 'Bollino_blu_expiry_date:') !!}
					{!! Form::text('bollino_blu_expiry_date', null, 
		                    array(
		                          'class'=>'form-control datepicker', 
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
					{!! Form::text('total_owners') !!}
				</div>				
			</div>
				<hr>

			<div class="form-group row">
				<div class='col-md-4'>
					{!! Form::label('accident_history', 'Accident_history:') !!}
					{!! Form::select('accident_history', array(
					'without_accident_history' => 'senza incidente', 
					'with_accident_history' => 'incidentata')) !!}
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
					{!! Form::text('insert_code') !!}
				</div>
				<div class='col-md-4'>
					{!! Form::label('vin', 'Vin:') !!}
					{!! Form::text('vin') !!}
				</div>
			</div>
				<hr>		
			<div class="form-group row">
				DISPONIBILITA<br>		
				<div class='col-md-4'>
					{!! Form::label('availability_period', 'Availability_period:') !!}
					{!! Form::text('availability_period', null, 
		                    array(
		                          'class'=>'form-control datepicker', 
		                          'id'=>'')) !!}
				</div>				
			</div>
				<hr>

			<div class="form-group row">
				CONSUMPTION<br>
		
				<div class='col-md-4'>
					{!! Form::label('consumptionemissions_id', 'Consumptionemissions_id:') !!}
					{!! Form::text('consumptionemissions_id') !!}
					@include('consumptionemissions')
				</div>
			</div>

<!--
		
		
		
	</ul>
	<ul>



		<div class='col-md-4'>
			{!! Form::label('immatriculation', 'Immatriculation:') !!}
			{!! Form::text('immatriculation', null, 
                    array(
                          'class'=>'form-control datepicker', 
                          'id'=>'')) !!}
		</div>



		<div class='col-md-4'>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('price_b2b', 'Price_b2b:') !!}
			{!! Form::text('price_b2b') !!}
		</div>


		<div class='col-md-4'>
			{!! Form::label('types_id', 'Types_id:') !!}
			{!! Form::text('types_id') !!}
		</div>




		<div class='col-md-4'>
			{!! Form::label('fuel_types_id', 'Fuel_types_id:') !!}
			{!! Form::text('fuel_types_id') !!}
		</div>

		<div class='col-md-4'>
			{!! Form::label('characteristics_id', 'Characteristics_id:') !!}
			{!! Form::text('characteristics_id') !!}
		</div>

		<hr>
			@include('characteristics.characteristics')
		<hr>

		<div class='col-md-4'>
			{!! Form::label('publish_flag', 'Publish_flag:') !!}
			{!! Form::text('publish_flag') !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('reserved_flag', 'Reserved_flag:') !!}
			{!! Form::text('reserved_flag') !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('images_id', 'Images_id:') !!}
			{!! Form::text('images_id') !!}
		</div>

!-->