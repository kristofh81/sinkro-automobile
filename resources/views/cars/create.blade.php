@extends('app')

@section('content')
<h1 style="text-align:center">Car Creation Page</h1><br>
<p style="text-align:center"><strong>Dati del veicolo</strong>&nbsp;&nbsp;/&nbsp;&nbsp;Immagini&nbsp;&nbsp;/&nbsp;&nbsp;Completato</p><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>1. Dati del veicolo</h4></div>
					<div class="panel-body">
        			@include('errors.errorlist')
					{!! Form::open(array('route' => 'cars.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
					@include('cars.form', ['carcheck' => 'create'])			
					</div>
				</div>
				<!--just outer panel!-->
				<div style="text-align:right">				
					{!! Form::submit('Immagini &gt;&gt;', array('class' => 'btn btn-default')) !!}
				</div>
					{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<a href="#" class="scrollToTop">
	<button type="button" class="btn btn-default btn-circle btn-lg">
        <img src="../img/arrow-up.png" class="arrow-up-scrolltop">
    </button>
</a>
@endsection

@section('scripts')
<script src="{{ asset('/js/myscripts.js') }}"></script>
<script src="{{ asset('/js/scrollscript.js') }}"></script>
<script type="text/javascript">
// ajax loading form element
$('#mark-select').change(function() {
	var input = "";
    $( "#mark-select option:selected" ).each(function() {
      input += $( this ).val();
    });

    var token = $('input[name=_token]').val();
    
    //ajax
    $.get( "{{url('/ajax-select-model?mark_id=')}}" + input, function(data) {
    	$('#model-data').empty();
    	$.each(data, function(index, model){
    		$('#model-data').append('<option value="'+model.id+'">'+ model.name +'</option>');
    	});
    });
    //return false;     
});
</script>
@endsection