(function($) {
	$(document).ready(function() {
        $('.connexion').velocity({
            opacity: [1, 0]
        }, {
            duration: 1000,
            display : 'block'
		});

		$('#connexionS').click(function() {
			$('.inscription').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
    		});
			$('.connexion').velocity({
                opacity: [1, 0]
            }, {
            	delay: 1500,
                duration: 1000,
                display : 'block'
    		});

			$('.MAIN_Form').velocity({
                height: [293, 687]
            }, {
            	delay: 900,
                duration: 1000,
                display : 'block'
    		});
		});

		$('#inscriptionS').click(function() {
			$('.connexion').velocity({
                opacity: [0, 1]
            }, {
                duration: 1000,
                display : 'none'
    		});
			$('.inscription').velocity({
                opacity: [1, 0]
            }, {
            	delay: 1000,
                duration: 1000,
                display : 'block'
    		});

			$('.MAIN_Form').velocity({
                height: [687, 293]
            }, {
                duration: 1000,
                display : 'block'
    		});
		});
		});
})(jQuery);