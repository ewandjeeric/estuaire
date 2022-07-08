$('documeny').ready(function(){
	$(".modifier").click(function() {

         var b = $(this).attr('id');

		 var id = $(this).closest('tr').children('td').eq(0).text();
         $('#example-date-input').val($(this).closest('tr').children('td').eq(6).attr('id'));
         $('#example-time-input').val($(this).closest('tr').children('td').eq(5).text());
         $('#example-tel-input').val('00237' + $(this).closest('tr').children('td').eq(1).text());
         $('#example-id-input').val(b);
         $('#example-noms-input').val($(this).closest('tr').children('td').eq(0).text());
         
         
	});
});