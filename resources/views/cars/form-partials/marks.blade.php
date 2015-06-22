	{!! Form::label('marca', 'Marca: *') !!}
		{!! Form::select('marks_id', 
			$marks, null, array('class' => 'form-control')); !!}
<br>
		{!! Form::label('model_id', 'Model_id:') !!}
		{!! Form::hidden('model_id', 1) !!}