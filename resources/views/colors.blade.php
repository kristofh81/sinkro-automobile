
	<ul>
		<li>
			{!! Form::label('color_type', 'Color_type:') !!}
			{!! Form::select('color_type', 
			array(
				'1' => 'Arancione',
				'2' => 'Argento',
				'3' => 'Bianco',
				'4  ' => 'Blu',
				'5' => 'Giallo',
				'6' => 'Grigio',
				'7' => 'Marrone',
				'8' => 'Oro',
				'9' => 'Rosso',
				'10' => 'Verde',
				'11' => 'Viola',
			)); !!}
		</li>
		<li>
			{!! Form::label('manufacturer', 'Manufacturer:') !!}
			{!! Form::text('manufacturer') !!}
		</li>
		<li>
			{!! Form::label('metallic', 'Metallic:') !!}
			{!! Form::checkbox('metallic' ) !!}
		</li>

	</ul>














