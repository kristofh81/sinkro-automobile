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
							@include('errors.errorlist')	
								<thead>
                                       <tr>
                                            <th>Immagine</th>
                                            <th>Marca</th>
                                            <th class="centered">Info</th>
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
											<dl class="dl-horizontal">
												<dt>categoria:</dt>
												<dd>{{ $car->category }}</dd>
												<dt>tipo:</dt>
												<dd>{{ $car->type }}</dd>
												<dt>carburante:</dt>
												<dd>{{ $car->fuel_type }}</dd>
												<dt>chilometraggio:</dt>
												<dd>{{ $car->mileage }} km</dd>
												<dt>prezzo:</dt>
												<dd>{{ $car->price }} €</dd>
											</dl>
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