			{!! Form::label('fuel_type', 'Carburante:') !!}
			{!! Form::select('fuel_type', 
			array(
				'0' => 'Seleziona',
				'1' => 'Benzina',
				'2' => 'Diesel',
				'3' => 'Elettrico',
				'4' => 'Etanolo (FFV, E85, ecc.)',
				'5' => 'Gas -> GPL',
				'6' => 'Gas -> Metano',
				'7' => 'Ibrido -> (benzina/elettrica)',
				'8' => 'Ibrida -> (diesel/elettrica)',
				'9' => 'Idrogeno',
				'10' => 'Altro',
			), 'key', array('class' => 'form-control')); !!}
