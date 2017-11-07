$( document ).ready( function(){

	$('form#form_contacto').submit(function(event){

		var nombre = $("#data_nombre").val();
		var empresa = $("#data_empresa").val();
		var email = $("#data_email").val();
		var mensaje = $("#data_mensaje").val();

		var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

		//disable the default form submission
		event.preventDefault();


		var test = ( emailRegExp.test(email) );

		if( !test ){

			$('#data_email').css("border", "1px solid #f51a1a");

		}else{

			$('#data_email').css("border", "1px solid #bdc4c9");

		}


		if( email != '' && test && nombre != '' && empresa != '' && mensaje != '' ){

			var formData = new FormData($(this)[0]);

			$.ajax({
			    url: 'includes/inc.contacto.php',
			    type: 'POST',
			    data: formData,
			    async: false,
			    cache: false,
			    contentType: false,
			    processData: false,
			    success: function (returndata) {

					$('#form_contacto')[0].reset();

					$('#msj_respuesta').css('display', 'block');

			    }
			});

		}else{

			if( nombre == '' ){

				$('#data_nombre').css("border", "1px solid #f51a1a");

			}else{

				$('#data_nombre').css("border", "1px solid #cccccc");

			}

			if( empresa == '' ){

				$('#data_empresa').css("border", "1px solid #f51a1a");

			}else{

				$('#data_empresa').css("border", "1px solid #cccccc");

			}

			if( mensaje == '' ){

				$('#data_mensaje').css("border", "1px solid #f51a1a");

			}else{

				$('#data_mensaje').css("border", "1px solid #cccccc");

			}

		}

	});


});