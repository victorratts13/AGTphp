$(document).ready(function(){
	$.get('.config/contacts.json', function(test){
		console.log(test)
		var nome = test.nome
	})
})