@extends('app')


@section('content')
<h1 style="text-align:center">Car Creation Page</h1><br>
<div class="container-fluid">
  	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<p style="text-align:center">Dati del veicolo&nbsp;&nbsp;/&nbsp;&nbsp;<strong>Immagini</strong>&nbsp;&nbsp;/&nbsp;&nbsp;Completato</p>
      		<div class="panel panel-default">
        		<div class="panel-heading">2. Image upload page</div>
        			
        			<div class="panel-body">
						<div>
					{!! Form::open(array('url' => 'images', 'method' => 'POST', 'enctype'=>'multipart/form-data')) !!}
						
								{!! Form::label('location', 'Location:') !!}
								{!! Form::text('location') !!}
							
								{!! Form::label('location', 'Location:') !!}
								
								{!! Form::file('filesUpload[]', array('id'=>'fileElem', 'multiple' =>'multiple', 'accept' => 'image/*', 'onChange'=>'handleFiles(this.files);')); !!}
							
								{!! Form::submit() !!}
			
						</div>
					
					<br>
						<div class="table-responsive">
							<table class="table table-bordered">
								
								<thead>
									<strong>Panello immagini:</strong>
								</thead>
								<tbody id="table-body">
									<tr id="preview">
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;"><br>Immagine
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>									
									</tr>
									<tr id="preview2">
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
											<br>Immagine
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
										<td>
											<img src="img/image-example.png" style="width:50%;height:40%;">
										</td>
									</tr>								
								</tbody>			
							</table>
							<p>Max. 14 immagini da inserire</p>
	
						<a href="">Elimina tutte le immagini</a>
						</div>
						
					</div>
				</div>
					<!--just outer panel!-->
					<div style="text-align:right">

					{!! Form::submit('completato &gt;&gt;', array('class' => 'btn btn-default')) !!}
					{!! Form::close() !!}
					</div>
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

	//row of placeholder images
	function placeholdimg(arg) {
		 while (arg.hasChildNodes()) {
			arg.removeChild(arg.firstChild);
		}
	}

   placeholdimg(preview);
   placeholdimg(preview2);
   	
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
    	img.classList.add("obj");
    	img.file = file;
   	
    	td.appendChild(img); // "preview" .td is the output where the content will be displayed.

    	var reader = new FileReader();
    	reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    	reader.readAsDataURL(file);
  		}
	}
	
	putfiles(0, 7,preview); 	
  	putfiles(7, 14,preview2);
  	
}
</script>
@endsection