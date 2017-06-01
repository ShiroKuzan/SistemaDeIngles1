
var oForm = document.getElementsByTagName('form')[0];

if (oForm.addEventListener) {                   
    oForm.addEventListener("submit", Validar);
} else if (oForm.attachEvent) {                  
    oForm.attachEvent("onsubmit", Validar);
}


function Validar(evento){
    var cUsuario = oForm.usuario.value;
    var cPassword = oForm.password.value;
  	var contadorErrores = 0;

	span_usuario = document.querySelector('.msg-usuario');
	 if(cUsuario===null || cUsuario.length===0 || /^\s*$/.test(cUsuario)){
        oForm.usuario.parentNode.classList.add('has-error');
        oForm.usuario.placeholder='Error en Usuario';
        oForm.usuario.select();
        // nuevo
		span_usuario.innerHTML = "Favor introducir usuario";
		span_usuario.style.display = 'block';
		contadorErrores++;
	}else{
        oForm.usuario.parentNode.classList.remove('has-error');
        oForm.usuario.parentNode.classList.add('has-success');
        oForm.usuario.placeholder='Usuario';
        oForm.password.focus();
        // nuevo
		span_usuario.style.display = 'none';
	}
    
  
	span_password = document.querySelector('.msg-password');
	if(cPassword===null  || /^\s*$/.test(cPassword)){
         oForm.password.parentNode.classList.add('has-error');
        oForm.password.placeholder='Error en Password';
        oForm.password.select(); //focus();
        // nuevo
		span_password.innerHTML = "Favor introducir Password";
		span_password.style.display = 'block';

		contadorErrores++;

	}else if(!(cPassword.length>=6 && cPassword.length<=14)){
         oForm.password.parentNode.classList.add('has-error');
        oForm.password.placeholder='Error en Password';
        oForm.password.select(); //focus();
        // nuevo
		span_password.innerHTML = "Favor introducir Password con un m&iacute;nimo de 6 y un m&aacute;ximo de 14 caracteres alfanumericos";
		span_password.style.display = 'block';
		contadorErrores++;
	}else{
        oForm.password.parentNode.classList.remove('has-error');
        oForm.password.parentNode.classList.add('has-success');
        oForm.password.placeholder='Password';
        oForm.password.value=sha1(cPassword);
        // nuevo
		span_password.style.display = 'none';
	}

	if(contadorErrores){
		evento.preventDefault();  //Evita el envío del oFormulario hasta comprobar
	}
}