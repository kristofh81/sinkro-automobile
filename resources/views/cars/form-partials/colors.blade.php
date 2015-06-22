		<div class='col-md-4'>
			{!! Form::label('color_type', 'Color_type:') !!}
			{!! Form::select('color_type', 
			array(
				'0' => 'Seleziona',
				'1' => 'Arancione',
				'2' => 'Argento',
				'3' => 'Bianco',
				'4' => 'Blu',
				'5' => 'Giallo',
				'6' => 'Grigio',
				'7' => 'Marrone',
				'8' => 'Oro',
				'9' => 'Rosso',
				'10' => 'Verde',
				'11' => 'Viola',
				'12' => 'Altro',
			), null, array('class' => 'form-control')); !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('manufacturer', 'Manufacturer:') !!}
			{!! Form::text('manufacturer', null, array('class' => 'form-control')) !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('metallic', 'Metallic:') !!}
			{!! Form::checkbox('metallic') !!}
		</div>
