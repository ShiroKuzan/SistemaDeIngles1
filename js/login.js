//archivo js para validar login
/*function Validar(){
    var cUsuario=document.getElementById('usuario').value;
    if(cUsuario==null||cUsuario.length==0||/^\s*$/.test(cUsuario)){
        alert('No cumple con el requisito ');
        return false;
    }
    return true;
}*/

window.onload=(function(){
    //un metodo
   //oInputs=document.getElementsByTagName('input');
   //oInputs[0].focus();
   //otro metodo
   //document.forms[0].usuario.focus();
});
function Validar(oForm){
    var cUsuario=oForm.usuario.value;
    if(cUsuario==null||cUsuario.length==0||/^\s*$/.test(cUsuario)){
        oForm.usuario.parentNode.classList.add('has-error');
        oForm.usuario.placeholder='Error en usuaio';
        oForm.usuario.focus();
        return false;
    }
    return true;
}