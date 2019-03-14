$(document).ready(function(){
	$('#form').submit(function(){
		var fdata = $('#form').serialize();
		var send_ok = document.getElementById('fdiv').innerHTML = "<font color='green'>Contato adicionado.</font>";
		$.ajax({
			type : 'POST',// metodo de envio
			url  : '.config/out.conn.php',//url para onde os dados serão enviados
			data : fdata, // dados capturados
			sucess: send_ok, // mensagen de sucesso
		});
		return false;
	});
});