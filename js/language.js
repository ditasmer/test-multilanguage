function validar(){
	//recoge comentarios sin espacios por delante y detrás
	let comentario_usuario = document.querySelector('#comentarios').value.trim()

	if(comentario_usuario == ''){
		//alert de variable php cuando el codigo JS está en el php interno
		//alert('<?=$error;?>');
		//alert variable JS cuando el codigo JS es externo
		alert (error);
		return;
	}
	alert('ok');
}