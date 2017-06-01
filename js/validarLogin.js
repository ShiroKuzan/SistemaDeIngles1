$(document).ready(function(){
    $('#login').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="entrar"]',//esta default [type="submit"]
        message:'Este no es un valor v&aacute;lido',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            usuario:{
                validators:{
                    notEmpty:{
                        message:'El usuario es obligatorio'
                    },
                    stringLegth:{
                        min:6,
                        max:14,
                        message:'El usuario debe tener al menos 6 caracteres y un maximo de 14 caracteres'
                    },
                    regexp:{
                        regexp:/^[a-zA-Z0-9_\.]+$/,
                        message:'El usuario solo puede llevar min&uacute;sculas, may&uacute;sculas, n&uacute;meros y p&uacute;ntos.'
                    }
                }
            },
            password:{
                validators:{
                    notEmpty:{
                        message:'El password es obligatorio'
                    },
                    
                    regexp:{
                        regexp:/^\S{6,20}$/,
                        message:'El password puede llevar todos los caracteres, solo los espacios no.'
                    }
                }
            }
        }
        });
    });