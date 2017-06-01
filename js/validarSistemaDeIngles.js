$(document).ready(function(){
    $('#AgregarEstudiantes').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="SaveStudent"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            controlid:{
                validators:{
                    notEmpty:{
                        message:'Control number is necesary'
                    },
                    regexp:{
                        regexp:/^[0-9]{8}$/,
                        message:'The control number only counts with 8 numbers'
                    }
                }
            },
            nombre:{
                validators:{
                    notEmpty:{
                        message:'The name is necesary'
                    },
                    
                    regexp:{
                        regexp:/^[a-zA-ZñÑáéíóú ]+$/,
                        message:'The name can only have letters and spaces.'
                    }
                }
            },
            semestre:{
                validators:{
                    notEmpty:{
                        message:'The semester is necesary'
                    },
                    
                    regexp:{
                        regexp:/^[0-1][0-9]$/,
                        message:'The semester only counts with 2 numbers.'
                    }
                }
            }
        }
        });
    $('#agregarGrupo').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="SaveGroup"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            //nota no se como vamos a manejar el id de grupo asi que lo dejo asi por si las dudas
            idGrupo:{
                validators:{
                    notEmpty:{
                        message:'Group id is necesary'
                    },
                    regexp:{
                        regexp:/^[0-1][0-9][HSW][1-2][2][0-9]{3}[/][N][0-9][0-9]$/,
                        message:'The group id counts with 12 characters.'
                    }
                }
            },
            nivel:{
                validators:{
                    notEmpty:{
                        message:'The level is necesary'
                    },
                    
                    regexp:{
                        regexp:/^[0-9][0-9]$/,
                        message:'The level counts with 2 numbers only.'
                    }
                }
            },
            aula:{
                validators:{
                    notEmpty:{
                        message:'The class room is necesary'
                    },
                    
                    regexp:{
                        regexp:/^[a-zA-Z]([0-9]||[0-9]{2})$/,
                        message:'The classroom does not exists.'
                    }
                }
            },
            rfc:{
                validators:{
                    notEmpty:{
                        message:'The RFC is necesary.'
                    },
                    //nota esta lo saque de una forma generica de la siguiente pagina https://es.stackoverflow.com/questions/31713/c%C3%B3mo-validar-un-rfc-de-m%C3%A9xico-y-su-digito-verificador asi que no se si funcione al 100%
                    regexp:{
                        regexp:/^[A-ZÑ&]{3,4}\d{6}(?:[A-Z\d]{3})?$/,
                        message:'The RFC is invalid'
                    }
                }
            },
            
        }
        });
    $('#agregarProfesores').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="SaveProfesor"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            rfc:{
                validators:{
                    notEmpty:{
                        message:'The RFC is necesary.'
                    },
                    
                    regexp:{
                        regexp:/^[A-ZÑ&]{3,4}\d{6}(?:[A-Z\d]{3})?$/,
                        message:'The RFC is invalid'
                    }
                }
            },
            nombre:{
                validators:{
                    notEmpty:{
                        message:'The name is necesary'
                    },
                    
                    regexp:{
                        regexp:/^[a-zA-ZñÑáéíóú ]+$/,
                        message:'The name can only have letters and spaces.'
                    }
                }
            }
           
            
        }
        });
    //([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]
    $('#horario').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="SaveHorario"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            lunesInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            lunesFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            martesInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            martesFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            miercolesInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            miercolesFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            juevesInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            juevesFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            viernesInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            viernesFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            sabadoInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            sabadoFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            domingoInicio:{
                validators:{
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            },
            domingoFinal:{
                validators:{
                    
                    
                    regexp:{
                        regexp:/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message:'The time is not valid it is a 24h format'
                    }
                }
            }
            
           
            
        }
        });
    $('#califica').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="SaveQualificate"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            calificacion:{
                validators:{
                    notEmpty:{
                        message:'Qualification is necesary'
                    },
                    regexp:{
                        regexp:/^0*(?:[1-9][0-9]?|100)$/,
                        message:'The quelification is an invalid value.'
                    }
                }
            }
        }
        });
    $('#liberarAlumno').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="liberar"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            numeroControl:{
                validators:{
                    notEmpty:{
                        message:'Control number is necesary'
                    },
                    regexp:{
                        regexp:/^[0-9]{8}$/,
                        message:'The number control only contains 8 numbers.'
                    }
                }
            },
            estado:{
                validators:{
                    notEmpty:{
                        message:'The status is needed'
                    },
                    regexp:{
                        regexp:/^[a-zA-Z]+$/,
                        message:'The status only admits letters.'
                    }
                }
            },
            comentario:{
                validators:{
                    
                    regexp:{
                        regexp:/^[a-zA-Z0-9\,\.\;\:\!\? ]+$/,
                        message:'Special characters are not accepted.'
                    }
                }
            }
        }
        });
    $('#Colocacion').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="colocar"]',//esta default [type="submit"]
        message:'This is not a valid value',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            numeroControl:{
                validators:{
                    notEmpty:{
                        message:'Control number is necesary'
                    },
                    regexp:{
                        regexp:/^[0-9]{8}$/,
                        message:'The number control only contains 8 numbers.'
                    }
                }
            },
            nivel:{
                validators:{
                    notEmpty:{
                        message:'The level is needed.'
                    },
                    regexp:{
                        regexp:/^[a-zA-Z][0-9]+$/,
                        message:'The level only counts with 1 letter then numbers without spaces.'
                    }
                }
            }
        }
        });
    
    });
