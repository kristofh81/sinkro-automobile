<!--errorbag-->
@if (count($errors) > 0)
    <div class="alert alert-danger">
       <strong>There were some problems with your input.</strong><br><br>
      	<ul>
        	@foreach ($errors->all() as $error)
          		<li>{{ $error }}</li>
        	@endforeach
      	</ul>
    </div>
@endif
<!--custom flash mss-->
@if (Session::has('flash_error_session_message'))
	<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('flash_error_session_message')}}</strong>
	</div>
@endif
@if (Session::has('flash_error_count_total_images_message'))
  <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{Session::get('flash_error_count_total_images_message')}}</strong>
  </div>
@endif
@if (Session::has('flash_error_countimages_message'))
  <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{Session::get('flash_error_countimages_message')}}</strong>
  </div>
@endif
@if (Session::has('flash_success_compl_img_message'))
  <div class="alert alert-success">
    <strong>{{Session::get('flash_success_compl_img_message')}}</strong>
  </div>
@endif
@if (Session::has('flash_success_compl_message'))
	<div class="alert alert-success">
		<strong>{{Session::get('flash_success_compl_message')}}</strong>
	</div>
@endif

