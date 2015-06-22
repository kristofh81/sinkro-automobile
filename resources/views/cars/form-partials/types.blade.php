	{!! Form::label('type', 'Tipo:') !!}
		{!! Form::select('type', 
			array(
				'0' => 'Seleziona',
				'Berlina' => 'Berlina',
				'Citycar' => 'Citycar',
				'Station wagon' => 'Station wagon',
				'Monovolume' => 'Monovolume',
				'Fuoristrada/pickup' => 'Fuoristrada/pickup',
				'Cabriolet/Roadster' => 'Cabriolet/Roadster',
				'Auto sportiva/coupé' => 'Auto sportiva/coupé',
				'Altro' => 'Altro',
			), null, array('class' => 'form-control')); 
		!!}