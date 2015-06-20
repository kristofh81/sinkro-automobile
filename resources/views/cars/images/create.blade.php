@extends('app')

@section('content')
<h1 style="text-align:center">Crea veicolo </h1><br>
<div class="container-fluid">
  	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<p style="text-align:center">Dati del veicolo&nbsp;&nbsp;/&nbsp;&nbsp;<strong>Immagini</strong>&nbsp;&nbsp;/&nbsp;&nbsp;Completato</p>
      		<div class="panel panel-default">
        		<div class="panel-heading">2. Image upload page</div>
        			
        			<div class="panel-body">
        			@include('errors.errorlist')
						
					{!! Form::open(array('action' => 'ImageController@store', 'method' => 'POST',  'class' => 'form-horizontal', 'files' => true)) !!}
													
						{!! Form::label('location', 'Scelgi immagini: *') !!}
								
						{!! Form::file('imagesUpload[]', array('id'=>'fileElem', 'multiple', 'required', 'accept' => 'image/*', 'onChange'=>'handleFiles(this.files);')); !!}
				
					<br><br>
						<div class="table-responsive">
							<table class="table table-bordered">
								
								<thead>
									<strong>Panello immagini</strong>
								</thead>
								<tbody id="table-body">
									<tr id="preview">
										<td>&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
											<br>&nbsp;&nbsp;&nbsp;&nbsp;Immagine
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
									
									</tr>
									<tr id="preview2">
										<td>&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
											<br>&nbsp;&nbsp;&nbsp;&nbsp;Immagine
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>

									</tr>
									<tr id="preview3">
										<td>&nbsp;
											<img src="../../img/image-example.png" align="middle" style="width:80px;height:70px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;Immagine
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" align="middle" style="width:80px;height:70px;">
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
										<td>&nbsp;&nbsp;
											<img src="../../img/image-example.png" style="width:80px;height:70px;">
										</td>
									</tr>								
								</tbody>			
							</table>
							<p>Max. 12 immagini da inserire</p>
	
						<a href="">Elimina tutte le immagini</a>
						</div>
						
					</div>
				</div>
					<!--just out panel right align!-->
					<div style="text-align:right">
						{!! Form::submit('Completa &gt;&gt;', array('class' => 'btn btn-default')) !!}
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