jQuery(function($){


    $('.logo-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })

    $('.category-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })

    $('.services-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:2,
                nav:true,
                loop:false
            }
        }
    })

    $('.home-bottom-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        }
    })

    $('.location-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        }
    })

    $('.insurance-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:false
            }
        }
    })

	$("#homeModal").modal('show');


    if (window.matchMedia("(max-width: 767px)").matches)  
    { 
        $('.category-section').addClass('owl-carousel owl-theme category-carousel');
    } else { 
        
    } 

    $('.color-item').each(function() {
        var str = $(this).find('.color-name').text();
        str = str.normalize('NFD').replace(/[\u0300-\u036f]/g, "").replace(/\s/g, '').toLowerCase();

        $(this).find('.color-preview').addClass('bg-couleurs_'+str);
    });

    $('.openmenu').on('click', function (e) {
        $('#menuOverlay').modal('show');
    });

    
    


});

jQuery(document).ready(function() {
    var $ = jQuery;
    if ($('.set_custom_images').length > 0) {
        if ( typeof wp !== 'undefined' && wp.media && wp.media.editor) {
            $(document).on('click', '.set_custom_images', function(e) {
                e.preventDefault();
                var button = $(this);
                var id = button.prev();
                wp.media.editor.send.attachment = function(props, attachment) {
                    id.val(attachment.url);
                };
                wp.media.editor.open(button);
                return false;
            });
        }
    }
});

jQuery(function($) {
    $(document).ready(function() {
        $("#readMore").click(function(){
            $(".collapsed-content").hide();
            $(".full-content").show();
            $("#readMore").toggle();// "read more link id"
            $(".product-part .full-content h3, .product-part .full-content p").removeAttr("style");
            return false;
        });
        $("#readLess").click(function(){
            $(".collapsed-content").show();
            $(".full-content").hide();
            $("#readLess").toggle();// "read more link id"
            return false;
        });
    });
});


