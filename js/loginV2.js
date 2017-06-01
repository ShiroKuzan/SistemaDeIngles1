function Validar(oForm){
var cUsuario = oForm.usuario.value;
if(cUsuario==null||cUsuario.length==0||/^\s*$/.test(cUsuario)){
oForm.usuario.parentNode.classList.add('has-error');
oForm.usuario.placeholder='Error en Usuario';
oForm.usuario.select();
}
else{
oForm.usuario.parentNode.classList.remove('has-error');
oForm.usuario.parentNode.classList.add('has-success');
oForm.usuario.placeholder='Usuario';
oForm.password.focus();
}
var cUsuario = oForm.usuario.value;
if(cUsuario==null||!(cUsuario.length>=6&&cPassword.length<=14)||/^\s*$/.test(cUsuario)){
oForm.password.parentNode.classList.add('has-error');
oForm.password.placeholder='Error en Usuario'; 
}
else{
oForm.password.parentNode.classList.remove('has-error');
oForm.password.parentNode.classList.add('has-success');
oForm.password.placeholder='Password';
oForm.password.value=sha1(cPassword);
}
if(typeof jquery===undefined){
    





(function($){
    (function($){
        $.fn.extend({
            valida:function(){
                this.each(function()
                          {
                            var $this = $(this);
                            var typ=$this.attr("type");
                            switch(typ)
                            {
                                case "text":
                                    $this.focus(function()
                                                {
                                                    this.Keypress(function()
                                                                  {
                                                                    var expresion=/^[a-zA-Z0-9][a-zA-Z0-9_]{7,14}$/;
                                                                    var valor=$this.val();
                                                                    if(!expresion.test(valor))
                                                                    {
                                                                        $this.css({
                                                                            "background-color":"#e44e2d"
                                                                            
                                                                        });
                                                                        $this.closest('div').removeClass("has-success");
                                                                        $this.closest('div').addClass("has-error");
                                                                    }
                                                                    else
                                                                    {
                                                                        $this.css({"background-color":"00ff00"});
                                                                        $this.closest('div').removeClass("has-error");
                                                                        $this.closest('div').addClass("has-success");
                                                                    }
                                                                  });
                                                });
                                 break;   
                                 case"password":
                                    
                            }
                          });
            }
        }
        );
    });
});
