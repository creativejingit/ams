	$( document ).ready(function() {
	    //Login Functionality
	    $(".login-btn").on('click', function (e) {
	        let email = $(".email").val();
	        let password = $(".password").val();
	        let user_type = $('.user_type').val();

	        if (email == '' || password == '') {
	    		$('.error_message').css('display', 'block');
                $('.error_message').html('<strong> Error! </strong> Please Fill Incomplete Fields.');
	        } else if (user_type == '') {
	        	$('.error_message').css('display', 'block');
                $('.error_message').html('<strong> Error! </strong> Please Select User Type.');
	        } else {
	            $.ajax({
	                url: APP_URL + "/log-in",
	                type: 'POST',
	                dataType: 'json',
	                data: {
	                    email: email,
	                    password: password,
	                    user_type: user_type,
	                    _token: $('meta[name="csrf-token"]').attr('content')
	                },
	                success: function (data) {
	                    if (data.status == 0) {
	                        $('.error_message').css('display', 'block');
	                        $('.error_message').css('margin-bottom', '50px');
	                        $('.error_message').html('<strong>' + data.errors + '</strong>');
	                        return false;
	                    } else if(data.status == -1) {
	                    	if(typeof(data.errors.password) != "undefined" && data.errors.password[0] !== null) {
		                    	$('.error_message').css('display', 'block');
		                    	$('.error_message').css('margin-bottom', '50px');
		                        $('.error_message').html('<strong>' + data.errors.password[0] + '</strong>');
	                    	}else if(typeof(data.errors.email) != "undefined" && data.errors.email[0] !== null) {
		                    	$('.error_message').css('display', 'block');
		                    	$('.error_message').css('margin-bottom', '50px');
		                        $('.error_message').html('<strong>' + data.errors.email[0] + '</strong>');
	                    	}else {
	                    		$('.error_message').css('display', 'none');
	                    	}
	                    } else {
	                        window.location = data.redirect_url;
	                    }
	                }
	            });
	        }
	    });


	  	//Registration Functionality
	    $(".sign-up-btn").on('click', function (e) {
	        let username 		= $(".username").val();
	        let email	 		= $(".email").val();
	        let password 		= $(".pass").val();
	        let password_conf 	= $(".pass2").val();

	        if (email == '' || password == '') {
	    		$('.error_message').css('display', 'block');
                $('.error_message').html('<strong> Error! </strong> Please Fill Incomplete Fields.');
	        } else {
	            $.ajax({
	                url: APP_URL + "/register",
	                type: 'POST',
	                dataType: 'json',
	                data: {
	                    username: username,
	                    email: email,
	                    password: password,
	                    password_conf: password_conf
	                },
	                success: function (data) {
	                    if (data.status == 0) {
	                        $('.error_message').css('display', 'block');
	                        $('.error_message').css('margin-bottom', '50px');
	                        $('.error_message').html('<strong>' + data.errors + '</strong>');
	                        return false;
	                    } else if(data.status == -1) {
	                    	if(typeof(data.errors.password) != "undefined" && data.errors.password[0] !== null) {
		                    	$('.error_message').css('display', 'block');
		                    	$('.error_message').css('margin-bottom', '50px');
		                        $('.error_message').html('<strong>' + data.errors.password[0] + '</strong>');
	                    	}else if(typeof(data.errors.password_conf) != "undefined" && data.errors.password_conf[0] !== null){
	                    		$('.error_message').css('display', 'block');
		                    	$('.error_message').css('margin-bottom', '50px');
		                        $('.error_message').html('<strong>' + data.errors.password_conf[0] + '</strong>');
	                    	}else if(typeof(data.errors.email) != "undefined" && data.errors.email[0] !== null) {
		                    	$('.error_message').css('display', 'block');
		                    	$('.error_message').css('margin-bottom', '50px');
		                        $('.error_message').html('<strong>' + data.errors.email[0] + '</strong>');
	                    	}else {
	                    		$('.error_message').css('display', 'none');
	                    	}
	                    } else {
	                        window.location = data.redirect_url;
	                    }
	                }
	            });
	        }
	    });

	    $(".btn-sidebar-dark").on('click', function (e) {
	    	$(this).addClass('active');
	    	let sidebarmenuColor = $(this).data('menu-color');
	    	let themeColor = $('.skin-selected').find('.actived').data('theme');
	    	// console.log(themeColor, sidebarmenuColor);

	    	$.ajax({
                url: APP_URL + "/save-user-theme",
                type: 'POST',
                dataType: 'json',
                data: {
                    sidebar_menu_colors: sidebarmenuColor,
                    skins: themeColor,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    
                }
            });
	    });

	    $(".btn-sidebar-light").on('click', function (e) {
	    	$(this).addClass('active');
	    	let sidebarmenuColor = $(this).data('menu-color');
	    	let themeColor = $('.skin-selected').find('.actived').data('theme');
	    	// console.log(themeColor, sidebarmenuColor);

	    	$.ajax({
                url: APP_URL + "/save-user-theme",
                type: 'POST',
                dataType: 'json',
                data: {
                    sidebar_menu_colors: sidebarmenuColor,
                    skins: themeColor,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    
                }
            });
	    });

	    $('.skin-selected').on('click', function (e) {
	    	let sidebarmenuColor = $('.btn-sidebar-menu-color').find('.active').data('menu-color');
	    	let themeColor = $(this).find('.actived').data('theme');
	    	// console.log(themeColor, sidebarmenuColor);

	    	$.ajax({
                url: APP_URL + "/save-user-theme",
                type: 'POST',
                dataType: 'json',
                data: {
                    sidebar_menu_colors: sidebarmenuColor,
                    skins: themeColor,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    
                }
            });
	    });

	});