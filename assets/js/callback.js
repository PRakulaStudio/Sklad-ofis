function callback_send(){
	var name  = $('#callback_name').val();
	var phone = $('#callback_phone').val();
	var policy = $('#callback_policy:checked').length;
	var error = 0;
	var err_msg = '';
	
	if(policy == 0){
		error = 1;
		err_msg = 'Вы должны принять политику конфиденциальности';
	}
	
	if(phone == ''){
		error = 1;
		err_msg = 'Поле "Телефон" не заполнено';
	}
	if(name == ''){
		error = 1;
		err_msg = 'Поле "Имя" не заполнено';
	}
	
	if(error == 0){
		$.post(
			'/callback.php',
			{
				'name':name,
				'phone':phone
			},
			function(data){
				if(data == 'ok'){
					alert('Ваша заявка успешно принята');
				} else{
					alert('Не удалось отправить заявку. Попробуйте позднее');
				}
				$('#callback_name').val('');
				$('#callback_phone').val('');
				$('#callback_div').css('display','none');
			}
		);
	} else {
		$('#err_msg').html(err_msg);
	}
	
}