{!! Form::open(array('url' => 'cars', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('potency', 'Potency:') !!}
			{!! Form::text('potency') !!}
		</li>
		<li>
			{!! Form::label('mileage', 'Mileage:') !!}
			{!! Form::text('mileage') !!}
		</li>
		<li>
			{!! Form::label('inscription_date', 'Inscription_date:') !!}
			{!! Form::text('inscription_date') !!}
		</li>
		<li>
			{!! Form::label('doors', 'Doors:') !!}
			{!! Form::text('doors') !!}
		</li>
		<li>
			{!! Form::label('cilinders', 'Cilinders:') !!}
			{!! Form::text('cilinders') !!}
		</li>
		<li>
			{!! Form::label('production_date', 'Production_date:') !!}
			{!! Form::text('production_date') !!}
		</li>
		<li>
			{!! Form::label('revision_expiry_date', 'Revision_expiry_date:') !!}
			{!! Form::text('revision_expiry_date') !!}
		</li>
		<li>
			{!! Form::label('bollino_blu_expiry_date', 'Bollino_blu_expiry_date:') !!}
			{!! Form::text('bollino_blu_expiry_date') !!}
		</li>
		<li>
			{!! Form::label('immatriculation', 'Immatriculation:') !!}
			{!! Form::text('immatriculation') !!}
		</li>
		<li>
			{!! Form::label('total_owners', 'Total_owners:') !!}
			{!! Form::text('total_owners') !!}
		</li>
		<li>
			{!! Form::label('accident_history', 'Accident_history:') !!}
			{!! Form::text('accident_history') !!}
		</li>
		<li>
			{!! Form::label('travel_ability', 'Travel_ability:') !!}
			{!! Form::text('travel_ability') !!}
		</li>
		<li>
			{!! Form::label('insert_code', 'Insert_code:') !!}
			{!! Form::text('insert_code') !!}
		</li>
		<li>
			{!! Form::label('vin', 'Vin:') !!}
			{!! Form::text('vin') !!}
		</li>
		<li>
			{!! Form::label('availability_period', 'Availability_period:') !!}
			{!! Form::text('availability_period') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('price_b2b', 'Price_b2b:') !!}
			{!! Form::text('price_b2b') !!}
		</li>
		<li>
			{!! Form::label('mark_id', 'Mark_id:') !!}
			{!! Form::text('mark_id') !!}
		</li>
		<li>
			{!! Form::label('models_id', 'Models_id:') !!}
			{!! Form::text('models_id') !!}
		</li>
		<li>
			{!! Form::label('types_id', 'Types_id:') !!}
			{!! Form::text('types_id') !!}
		</li>
		<li>
			{!! Form::label('versions_id', 'Versions_id:') !!}
			{!! Form::text('versions_id') !!}
		</li>
		<li>
			{!! Form::label('colors_id', 'Colors_id:') !!}
			{!! Form::text('colors_id') !!}
		</li>
		<li>
			{!! Form::label('categories_id', 'Categories_id:') !!}
			{!! Form::text('categories_id') !!}
		</li>
		<li>
			{!! Form::label('nations_id', 'Nations_id:') !!}
			{!! Form::text('nations_id') !!}
		</li>
		<li>
			{!! Form::label('fuel_types_id', 'Fuel_types_id:') !!}
			{!! Form::text('fuel_types_id') !!}
		</li>
		<li>
			{!! Form::label('consumptionemissions_id', 'Consumptionemissions_id:') !!}
			{!! Form::text('consumptionemissions_id') !!}
		</li>
		<li>
			{!! Form::label('characteristics_id', 'Characteristics_id:') !!}
			{!! Form::text('characteristics_id') !!}
		</li>
		<li>
			{!! Form::label('publish_flag', 'Publish_flag:') !!}
			{!! Form::text('publish_flag') !!}
		</li>
		<li>
			{!! Form::label('reserved_flag', 'Reserved_flag:') !!}
			{!! Form::text('reserved_flag') !!}
		</li>
		<li>
			{!! Form::label('images_id', 'Images_id:') !!}
			{!! Form::text('images_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}