		<div class='col-md-4'>
			{!! Form::label('color_type', 'Colore:') !!}
			{!! Form::select('color_type', 
			array(
				'0' => 'Seleziona',
				'Arancione' => 'Arancione',
				'Argento' => 'Argento',
				'Bianco' => 'Bianco',
				'Blu' => 'Blu',
				'Giallo' => 'Giallo',
				'Grigio' => 'Grigio',
				'Marrone' => 'Marrone',
				'Oro' => 'Oro',
				'Rosso' => 'Rosso',
				'Verde' => 'Verde',
				'Viola' => 'Viola',
				'Altro' => 'Altro',
			), ($car!=='create' ? $color->color_type : null), array('class' => 'form-control')); !!}
		</div>
		<div class='col-md-4'>
			{!! Form::label('manufacturer', 'Nome colore del produttore:') !!}
			{!! Form::text('manufacturer', ($car!=='create' ? $color->manufacturer : null), array('class' => 'form-control')) !!}
		</div>
		<div class='col-md-4'>
			{!! Form::checkbox('metallic',  1, ($car!=='create' ? $color->metallic : false) , '') !!}
			{!! Form::label('metallic', ' Metallizzato') !!}
		</div>
