			{!! Form::label('name', 'Name:') !!}
			{!! Form::select('name_nations', 
			array(
			'0'=>'Seleziona',
			'1'=>'Italia',
            '2'=>'Germania',
            '3'=>'Austria',
            '4'=>'Svizzera',
            '5'=>'Francia',
			), 'key', array('class' => 'form-control')); !!}

