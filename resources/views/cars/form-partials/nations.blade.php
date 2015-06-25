		{!! Form::select('nations_id', 
			$nations,
			($car!=='create' ? $car->nationsList($car->id) : null), array('class' => 'form-control')); 
		!!}