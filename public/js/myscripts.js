//Datepicker on forms
$(function() {
   $( ".calendar" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: "dd/mm/yy", maxDate: "+10Y" }); 
});


//select buttons
$(function() {
   $('.radio-button').on("click", function(event){
    $('.radio-button').prop('checked', false);
     $(this).prop('checked', true);
  });
});
