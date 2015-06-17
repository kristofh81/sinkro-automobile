	{!! Form::label('marca', 'Marca: *') !!}
		{!! Form::select('marks_id', 
			array(
				'0' => 'Seleziona',
				'1' => 'Fiat',
				'2' => 'Lancia',
				'3' => 'Nissan',
				'4' => 'Opel',
				'5' => 'Renault',
				'6' => 'Smart',
				'7' => 'Toyota',
				'8' => 'Altro',
			), 'key', array('class' => 'form-control')); !!}
<br>
		{!! Form::label('model_id', 'Model_id:') !!}
		{!! Form::hidden('model_id', 1) !!}