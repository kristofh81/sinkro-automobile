
			{!! Form::label('name', 'Name:') !!}
			{!! Form::select('name_marks', 
			array(
				'1' => 'Fiat',
				'2' => 'Lancia',
				'3' => 'Nissan',
				'4  ' => 'Opel',
				'5' => 'Renault',
				'6' => 'Smart',
				'7' => 'Toyota',
				'0' => 'Altro',
			)); !!}

			{!! Form::label('model_id', 'Model_id:') !!}
			{!! Form::text('model_id') !!}

