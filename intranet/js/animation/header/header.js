var openMenu = new Boolean(false);
var userProfileOpen = new Boolean(false);
var settingsOpen = new Boolean(false);
(function($) {
	$(document).ready(function() {
		$('.settings').click(function() {
	        if(openMenu == false) {
	        	openMenu = true;
	        	$('.TIRNA_header_compte').velocity({
                	opacity: [1, 0]
	            }, {
	                duration: 1000,
	                display : 'block'
        		});
		        $('#TIRNA_header_menu').velocity({
	                opacity: [1, 0]
	            }, {
	                duration: 1000,
	                display : 'block'
        		});
		        $('.TIRNA_header_menu_box').velocity("transition.fadeIn",{
		        	stagger: 50,
	            	delay: 500,
	                duration: 1500,
	                display : 'inline-block'
        		});
		        $('.TIRNA_header_menu_title').velocity({
	                opacity: [1, 0]
	            }, {
	            	delay: 1500,
	                duration: 1000,
	                display : 'block'
        		});
	        } else {
	        	openMenu = false;
	        	$('.TIRNA_header_compte').velocity({
                opacity: [0, 1]
	            }, {
	                duration: 1000,
	                display : 'none'
        		});
		        $('#TIRNA_header_menu').velocity({
	                opacity: [0, 1]
	            }, {
	            	delay: 1500,
	                duration: 1000,
	                display : 'none'
        		});
		        $('.TIRNA_header_menu_box').velocity("transition.fadeOut",{
		        	stagger: 50,
	                duration: 1500,
	                display : 'none'
        		});
		        $('.TIRNA_header_menu_title').velocity({
	                opacity: [0, 1]
	            }, {
	                duration: 1000,
	                display : 'none'
	            });

		        if (userProfileOpen) {
			        $('.TIRNA_header_userProfile').velocity({
		                opacity: [0, 1]
		            }, {
		                duration: 1000,
		                display : 'none'
	        		});
			        $('.userBox').velocity({
		                opacity: [0, 1]
		            }, {
		                duration: 1000,
		                display : 'none'
	        		});
		        };

		        if (settingsOpen) {
			        $('.TIRNA_header_settings').velocity({
		                opacity: [0, 1]
		            }, {
		                duration: 1000,
		                display : 'none'
	        		});
		        };
	        }
		});


		$('#userProfile_T').click(function() {
			userProfileOpen = true;
	        $('.TIRNA_header_menu_box').velocity("transition.fadeOut",{
	        	stagger: 50,
                duration: 1500,
                display : 'none'
    		});
	        $('.TIRNA_header_menu_title').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
            });
	        $('.TIRNA_header_userProfile').velocity({
                opacity: [1, 0],
                width: [1122, 0],
                height: [360, 0]
            }, {
            	delay: 1500,
                duration: 1000,
                display : 'block'
    		});
    		$('.userBox').velocity("transition.fadeIn",{
	        	stagger: 200,
            	delay: 2500,
                duration: 500,
                display : 'inline-block'
    		});
		});
		$('.TIRNA_header_userProfile_close').click(function() {
			userProfileOpen = false;
	        $('.TIRNA_header_menu_box').velocity("transition.fadeIn",{
	        	stagger: 50,
            	delay: 500,
                duration: 1500,
                display : 'inline-block'
    		});
	        $('.TIRNA_header_menu_title').velocity({
                opacity: [1, 0]
            }, {
            	delay: 1500,
                duration: 1000,
                display : 'block'
    		});
	        $('.TIRNA_header_userProfile').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
    		});
	        $('.userBox').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
    		});
		});


		$('#settings_T').click(function() {
			settingsOpen = true;
	        $('.TIRNA_header_menu_box').velocity("transition.fadeOut",{
	        	stagger: 50,
                duration: 1500,
                display : 'none'
    		});
	        $('.TIRNA_header_menu_title').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
            });
	        $('.TIRNA_header_settings').velocity({
                opacity: [1, 0]
            }, {
            	delay: 1500,
                duration: 1000,
                display : 'block'
    		});
	        $('.stagger_THS').velocity("transition.fadeIn",{
	        	stagger: 200,
	        	delay: 1600,
                duration: 1500,
                display : 'block'
    		});
		});
		$('.TIRNA_header_settings_close').click(function() {
			settingsOpen = true;
	        $('.TIRNA_header_menu_box').velocity("transition.fadeIn",{
	        	stagger: 50,
            	delay: 500,
                duration: 1500,
                display : 'inline-block'
    		});
	        $('.TIRNA_header_menu_title').velocity({
                opacity: [1, 0]
            }, {
            	delay: 1500,
                duration: 1000,
                display : 'block'
    		});
	        $('.TIRNA_header_settings').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
    		});
		});

		$('#THS_restart').click(function() {
	        $('#THS_restart').velocity("transition.fadeOut",{
                duration: 500,
                display : 'none'
    		});
	        $('.THS_restore').velocity("transition.fadeIn",{
	        	delay: 250,
                duration: 1000,
                display : 'block'
    		});
		});

		$('#restore_no').click(function() {
	        $('.THS_restore').velocity("transition.fadeOut",{
                duration: 500,
                display : 'none'
    		});
	        $('#THS_restart').velocity("transition.fadeIn",{
	        	delay: 250,
                duration: 1000,
                display : 'block'
    		});
		});

		});
})(jQuery);