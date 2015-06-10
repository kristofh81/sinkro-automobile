@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Cars List</div>
				<div class="panel-body">

					This shows all the Cars:
					<ul>
						@foreach ($cars as $car)
							<li><a href="cars/{{ $car->id }}"> {{ $car->name }}</a></li>
							{{ $car->name }}
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection