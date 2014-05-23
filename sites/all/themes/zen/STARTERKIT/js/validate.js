$(document).ready(function(){

    $('#webform-client-form-8').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			},
			"submitted[question]":{
				required: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			},
			"submitted[question]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>"	
			}
		}
	});

	$('#webform-client-form-4').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});


		$('#webform-client-form-5').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "Это поле обязательно для заполнения",
				minlength: "Мининум 2 символа",
                maxlength: "Максимум 16 символов"
			},
			"submitted[phone]":{
				required: "Это поле обязательно для заполнения",
				minlength: "Мининум 6 символа",
                maxlength: "Максимум 16 символов",	
                digits: "Только цифры"
			},
			"submitted[email]":{
				required: "Это поле обязательно для заполнения",
				email: "Электронный адрес введен неверно"
			}
		}
	});


$('#webform-client-form-7').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

$('#webform-client-form-10').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

$('#webform-client-form-9').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

$('#webform-client-form-11').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

    $('#webform-client-form-12').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

    $('#webform-client-form-13').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 30,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

     $('#calc').validate({
		rules:{
			"ploshad":{
				required: true,
				minlength: 1,
                maxlength: 3,
                digits: true
			},
			"vis_potolka":{
				required: true,
				minlength: 1,
                maxlength: 3,	
                number: true
			},
			"kol_ludei":{
				required: true,
				minlength: 1,
                maxlength: 3,	
                digits: true
			},
			"kol_komp":{
				required: true,
				minlength: 1,
                maxlength: 3,	
                digits: true
			}


		},
		messages:{
			"ploshad":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 1 символ</div>",
                maxlength: "<div class='error_message'>Максимум 3 символа</div>",
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"vis_potolka":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 1 символ</div>",
                maxlength: "<div class='error_message'>Максимум 3 символа</div>",
                number: "<div class='error_message'>Только цифры</div>"
			},
			"kol_ludei":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 1 символ</div>",
                maxlength: "<div class='error_message'>Максимум 3 символа</div>",
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"kol_komp":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 1 символ</div>",
                maxlength: "<div class='error_message'>Максимум 3 символа</div>",
                digits: "<div class='error_message'>Только цифры</div>"
			}
		}
	});

});