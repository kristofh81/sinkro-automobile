@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Immagini della machina: <strong>{{$car_id}}</strong> :</h4></div>
				<div class="panel-body">
					@include('errors.errorlist')
					<div class="form-group row">
						<div class='col-md-8'>
							<div class="well">
							<strong></strong>
								<ul id="prepend-images" class="list-inline">
									<li>
										
									</li>
								</ul>
								
								<ul class="list-inline">	
									@foreach ($images as $image)
									<li style="margin:2px;"><img src="../../../{{ $image->location }}" style="width:150px;height:100px;"></li>
									@endforeach						
								</ul>
							</div>
						</div>

						<div class='col-md-4'>
							<div class="panel panel-primary">
                        		<div class="panel-heading">
                        	    Aggiungi altri immagini:
                        		</div>
                        		<div class="panel-body">
							{!! Form::open(array('action' => ['ImageController@update', $car_id], 'method' => 'PATCH',  'class' => 'form-horizontal', 'files' => true)) !!}

								{!! Form::label('location_new', 'Scelgi altri immagini: *') !!}
								
								{!! Form::file('newimagesUpload[]', array('id'=>'fileElem', 'multiple', 'required', 'accept' => 'image/*', 'onChange'=>'handleFiles(this.files);')); !!}

								<br>
									<p>Si trovanno <strong>{{$count_images_in_db}}</strong> photo nel database per questa machina</p>
									<p><strong>Max. 12</strong> immagini da inserire</p>
								<br>
									<ul class="list-unstyled">
										<li><a href="{{action('ImageController@edit', $car_id)}}"" class="btn btn-default btn-block">Aggiungi altri immagini</a></li>
										<li><a href="{{action('ImageController@edit', $car_id)}}"" class="btn btn-default btn-block">Elimina e scelgi altri immagini</a></li>
										<li><a href="" class="btn btn-default btn-block">Elimina tutte immagini</a></li>
										<li><a href="{{URL::previous()}}" class="btn btn-default btn-block">Indietro</a></li>
									</ul>
								</div>
								<div class="panel-footer">
                        		    Panel Footer
                        		</div>
							</div><!--end of panel-primary-->
						<br><br>
						<a href="">Elimina tutte le immagini</a>						
						</div>
					</div>
				</div>
				</div><!--end of panel-default-->
					<!--just out panel right align!-->
					<div style="text-align:right">
						{!! Form::submit('Inserisci &gt;&gt;', array('class' => 'btn btn-default')) !!}
					</div>
				
					{!! Form::close() !!}				
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

function handleFiles(files) {
	//preview = tr, put placeholders
	var preview = document.getElementById("preview");
	var preview2 = document.getElementById("preview2");
	var preview3 = document.getElementById("preview3");

	//row of placeholder images
	function placeholdimg(arg) {
		 while (arg.hasChildNodes()) {
			arg.removeChild(arg.firstChild);
		}
	}

   placeholdimg(preview);
   placeholdimg(preview2);
   placeholdimg(preview3);
   	
   	//put away pictures
	function putfiles (min, max, parentEl) {
		for (var i = min; i < max; i++) {
  	  	var file = files[i];
  	  	var imageType = /^image\//;
  	  
  	  	if (!imageType.test(file.type)) {
  	    	continue;
  	  	}

    	var td = document.createElement("td");
    	parentEl.appendChild(td);
    	td.classList.add("td-images");
    
    	var img = document.createElement("img");
    	img.classList.add("obj-img");
    	img.setAttribute("align","middle");
    	img.file = file;
   	
    	td.appendChild(img); // "preview" .td is the output where the content will be displayed.

    	var reader = new FileReader();
    	reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    	reader.readAsDataURL(file);
  		}
	}
	
	putfiles(0, 4,preview); 	
  	putfiles(4, 8,preview2);
  	putfiles(8, 12,preview3);
  	
}
</script>
@endsection

