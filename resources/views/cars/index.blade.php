@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Lista delle machine <em>pubblicate</em>:</div>
				<div class="panel-body">
					<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">								
								<thead>
                                       <tr>
                                            <th>Immagine</th>
                                            <th>Marca</th>
                                            <th>Categoria</th>
                                            <th>Info</th>
                                            <th></th>
                                            <th></th>                                         
                                        </tr>
                                </thead>
    		
								<tbody id="table-body">
									<?php foreach ($cars as $key => $car) {?>
									<tr>
										<td>										
											<a href="{{ route('cars.show', $car->id) }}"><img src="{{ $images[$key]['location'] }}" class="imglist"></a>
										</td>
										<td>
											{{ $marks[$key]['name'] }}
										</td>	
										<td>
											{{ $car->category }}
										</td>
										<td>
											<ul>
												<li>{{ $car->category }}</li>
												<li>{{ $car->type }}</li>
												<li>{{ $car->fuel_type }}</li>
												<li>{{ $car->mileage }} km</li>
												<li>{{ $car->price }} €</li>
											</ul>
										</td>	
										<td>
											<a href="{{ route('cars.show', $car->id) }}" class ="btn btn-default">Dettagli</a>
										</td>
										<td>
											<a href="cars/images/{{$car->id}}" class ="btn btn-default">Immagini</a>
										</td>
								
									</tr>
									<?php } ?>
								</tbody>			
							</table>
							
	
						<a href="{{ route('cars.create') }}" class ="btn btn-default">Crea nuova machina</a>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>
</div>
<a href="#" class="scrollToTop">
	<button type="button" class="btn btn-default btn-circle btn-lg">
        <img src="img/arrow-up.png" class="arrow-up-scrolltop">
    </button>
</a>
@endsection