$(function() {
	$( ".datepicker" ).datepicker({ 
   	changeMonth: true,
    changeYear: true,
    truedateFormat: "dd/mm/yy"
    });

   $( ".datepickerpast" ).datepicker({ 
   	truedateFormat: "dd/mm/yy", 
    changeMonth: true,
    changeYear: true,
    maxDate: "+2Y",
    defaultDate: "-10y"
    });

   $('.radio-button').on("click", function(event){
    $('.radio-button').prop('checked', false);
     $(this).prop('checked', true);
  });
});
