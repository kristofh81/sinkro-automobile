	{!! Form::label('type', 'Tipo:') !!}
		{!! Form::select('type', 
			array(
				'0' => 'Seleziona',
				'1' => 'Berlina',
				'2' => 'Citycar',
				'3' => 'Station wagon',
				'4' => 'Monovolume',
				'5' => 'Fuoristrada/pickup',
				'6' => 'Cabriolet/Roadster',
				'7' => 'Auto sportiva/coupé',
				'8' => 'Altro',
			), 'key', array('class' => 'form-control')); 
		!!}