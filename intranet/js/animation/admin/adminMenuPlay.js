(function($) {
			$(document).ready(function() {
				$('#profile').click(function() {
					$('.adminProfile').velocity("transition.fadeIn",{
		                duration: 1000,
		                display : 'block'
	        		});
					$('.adminListePlayerIntranet').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminListeSite').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminListeTrackSite').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
				});
				$('#listPlayerIntranet').click(function() {
					$('.adminListePlayerIntranet').velocity("transition.fadeIn",{
		                duration: 1000,
		                display : 'block'
	        		});
					$('.adminProfile').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminListeSite').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminListeTrackSite').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
				});
				$('#listSite').click(function() {
					$('.adminListeSite').velocity("transition.fadeIn",{
		                duration: 1000,
		                display : 'block'
	        		});
					$('.adminListePlayerIntranet').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminProfile').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminListeTrackSite').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
				});
				$('#listTrackSite').click(function() {
					$('.adminListeTrackSite').velocity("transition.fadeIn",{
		                duration: 1000,
		                display : 'block'
	        		});
					$('.adminListeSite').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminListePlayerIntranet').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
					$('.adminProfile').velocity("transition.fadeOut",{
		                duration: 1000,
		                display : 'none'
	        		});
				});
			});
		})(jQuery);