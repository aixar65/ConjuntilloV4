

$('.dropdown').on('show.bs.dropdown', function () {
	$('.dropdown-item').on('click',function(evento){
		
		var seleccionado=$(this).text();

		$('#dropdownMenuButton').text(seleccionado);
		$(this).evento.off();
	})

})
$(".circulo").draggable();


  	