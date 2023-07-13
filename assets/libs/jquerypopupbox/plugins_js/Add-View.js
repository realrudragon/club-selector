	//กล่องข้อความ Jquery notification popup box
	$(".success").click(function(){
		toastr.success('We do have the Kapua suite available.', 'Success Alert', {timeOut: 5000})
		//.$(".success") >success //เอาไปใส่ใน class button
		//timeOut: 5000 คือความเร็วของกล่องข้อความ
	});

	$(".error").click(function(){
		toastr.error('You Got Error', 'Inconceivable!', {timeOut: 5000})
		//.$(".error") >error //เอาไปใส่ใน class button
		//timeOut: 5000 คือความเร็วของกล่องข้อความ
	});

	$(".info").click(function(){
		toastr.info('It is for your kind information', 'Information', {timeOut: 5000})
		//.$(".info") >info //เอาไปใส่ใน class button
		//timeOut: 5000 คือความเร็วของกล่องข้อความ
	});

	$(".warning").click(function(){
		toastr.warning('It is for your kind warning', 'Warning', {timeOut: 5000})
		//.$(".warning") >warning //เอาไปใส่ใน class button
		//timeOut: 5000 คือความเร็วของกล่องข้อความ
	});
	//กล่องข้อความ Jquery notification popup box
