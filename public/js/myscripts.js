$(function() {
   $( ".calendar" ).datepicker({ dateFormat: "dd/mm/yy", maxDate: "+10Y" }); 
});

//datepicker
$(function() {
  $( ".calendar-past" ).datepicker({ 
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd/mm/yy"
  });
});

//select buttons
$(function() {
   $('.radio-button').on("click", function(event){
    $('.radio-button').prop('checked', false);
     $(this).prop('checked', true);
  });
});
