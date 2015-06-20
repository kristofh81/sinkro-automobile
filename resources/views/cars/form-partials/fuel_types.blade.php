			{!! Form::label('fuel_type', 'Carburante:') !!}
			{!! Form::select('fuel_type', 
			array(
				'0' => 'Seleziona',
				'Benzina' => 'Benzina',
				'Diesel' => 'Diesel',
				'Elettrico' => 'Elettrico',
				'Etanolo' => 'Etanolo (FFV, E85, ecc.)',
				'GPL' => 'Gas -> GPL',
				'Metano' => 'Gas -> Metano',
				'Ibrido (benzina/elettrica)' => 'Ibrido -> (benzina/elettrica)',
				'Ibrida (diesel/elettrica)' => 'Ibrida -> (diesel/elettrica)',
				'Idrogeno' => 'Idrogeno',
				'Altro' => 'Altro',
			), 'key', array('class' => 'form-control')); 
			!!}