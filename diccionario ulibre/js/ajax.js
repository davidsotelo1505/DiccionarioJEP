$(function(){
	$('#search').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#logo').html('<h2>Buscador de palabras</h2>')
		$('#resultados').html('<h2><img src="img/loading.gif" width="20" alt="" />Cargando</h2>')

		$.ajax({
			type:'POST',
			url: 'php/buscador.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			}
		})
	})
})