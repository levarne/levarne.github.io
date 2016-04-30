var LEVARNESOBOTKER = window.LEVARNESOBOTKER || {};



LEVARNESOBOTKER.filter = function(){
	if($('#mazaik-container').length > 0){	
		var $container = $('#mazaik-container');

		$container.imagesLoaded(function(){
			$container.isotope({
			  // options
			  animationEngine: 'best-available',
			  itemSelector : '.mozaik-item',
			  layoutMode : 'fitRows'
			});
		});		

		// filter items when filter link is clicked 
		var $optionSets = $('#options .option-set'),
			$optionLinks = $optionSets.find('a');
	
		  $optionLinks.click(function(){
			var $this = $(this);
			// don't proceed if already selected
			if ( $this.hasClass('selected') ) {
			  return false;
			}
			var $optionSet = $this.parents('.option-set');
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');
	  
			// make option object dynamically, i.e. { filter: '.my-filter-class' }
			var options = {},
				key = $optionSet.attr('data-option-key'),
				value = $this.attr('data-option-value');
			// parse 'false' as false boolean
			value = value === 'false' ? false : value;
			options[ key ] = value;
			if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
			  // changes in layout modes need extra logic
			  changeLayoutMode( $this, options )
			} else {
			  // otherwise, apply new options
			  $container.isotope( options );
			}
			
			return false;
		});
	};
};

LEVARNESOBOTKER.scrollTo = function(){
    $('a[href*=#]:not([href=#])').each(function(){
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $(this).on('click touchend',function() {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                });
            }
        }
    });
}

LEVARNESOBOTKER.showModal = function(){
        var html = '<div id="genericModal" class="modal fade" tabindex="-1" role="dialog">' +
                        '<div class="modal-dialog">' +
                            ' <div class="modal-content">' +
                                ' <div class="modal-header">' +
                                    '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<h4 class="modal-title">Modal title</h4>' +
                                '</div>' +
                                '<div class="modal-body">' +
                                    ' <p>One fine body&hellip;</p>' +
                                '</div>' +
                                '<div class="modal-footer">' +
                                    ' <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
                                    '<button type="button" class="btn btn-primary">Save changes</button>' +
                                '</div>' +
                            '</div>'+
                        '</div>' +
                    '</div>';

    $('.onModalClick').on('click', function(e){
        return;
        $body = $('body');

        if($('#genericModal').length <= 0){
            $body.append(html);
        }

        setTimeout(function(){
            $('#genericModal').modal({});
        }, 0);
    });
}

LEVARNESOBOTKER.contactForm = function(){
    $("#contact-submit").on('click',function() {
        $contact_form = $('#contact-form');

        var fields = $contact_form.serialize();

        $.ajax({
            type: "POST",
            url: "includes/contact.php",
            data: fields,
            dataType: 'json',
            success: function(response) {

                if(response.status){
                    $('#contact-form input').val('');
                    $('#contact-form textarea').val('');
                }

                $('#response').empty().html(response.html);
            }
        });
        return false;
    });
}


$(document).ready(function(){

    var header = $('.header-main');
        header.css('height', header.height());

    $('body').jpreLoader({
		splashID: "#jSplash",
		showSplash: true,
		showPercentage: true,
		autoClose: true,
		splashFunction: function() {
			$('#circle').delay(250).animate({'opacity' : 1}, 500, 'linear');
		}
	});

	LEVARNESOBOTKER.filter();
    LEVARNESOBOTKER.scrollTo();
    LEVARNESOBOTKER.showModal();
    LEVARNESOBOTKER.contactForm();

    $('body').scrollspy({ target: '#navbar' })
});




/* ==================================================
	Init
================================================== */