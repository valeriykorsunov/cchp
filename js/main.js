function headerFixed() {
    if ($(window).width() >= 992){
        var $header = $('.js-header');

        if ($(window).scrollTop() > 0) {
            $('body').addClass('fixed-header');
            $header.addClass('header_sm');
            $('.js-header-phones').hide();
        } else {
            $('body').removeClass('fixed-header');
            $header.removeClass('header_sm');
            $('.js-header-phones').show();
            $('.js-phones-toggle').removeClass('active');
        }
    }
}

jQuery(document).ready(function($){
    // Header
    $(window).on('load scroll resize orientationchange', function() {
        headerFixed();
    });

    // Обратный звонок
	$('#appointment-form').on('submit',(function(e){
	    var obj = $(this);
	    $.ajax({
	        url: "/send_form.php",
	        type: "POST",
	        data:  new FormData(this),
	        contentType: false,
	        cache: false,
	        processData:false,
	        success: function(data){ 
				$("#appointment-form-content").fadeOut(400);
	            $("#appointment-form-result").html('<div class="yeah-send">'+data+'</div>').delay( 500 ).fadeIn( 400 );
				$(obj)[0].reset();
	        },
	        error: function(data){}
	    });
		return false;
 	}));
	
	// Nav
    $(".js-nav-toggle").click(function(){
        var $this = $(this);
 
        if ($this.hasClass('active')) {
            $(".js-nav").slideUp();
            $this.removeClass('active');
        } else {
            $('.js-header-phones').hide();
            $(".js-nav").slideDown();
            $this.siblings().removeClass('active');
            $this.addClass('active');
        }
    });

    // Custom control
    $(".custom-control__input").prop("indeterminate", true);

    // Form with toggle
    $(".js-form-toggle").click(function(e){
        e.preventDefault();
        var $formWithToggle = $(this).parent(".js-form-with-toggle"),
            $toggleForm = $formWithToggle.find('.js-form-with-toggle-body'),
            $toggleText = $(this).find('.js-form-toggle-text'),
            $toggleIcon = $(this).find('.js-form-toggle-icon'),
            toggleDefaultTextValue = $toggleText.attr('data-default-text'),
            toggleActiveTextValue = $toggleText.attr('data-active-text'),
            toggleDefaultIconClass = $toggleIcon.attr('data-default-icon'),
            toggleActiveIconClass = $toggleIcon.attr('data-active-icon'),
            switchClass = 'active';
        if ($formWithToggle.hasClass(switchClass)) {
            $toggleText.html(toggleDefaultTextValue);
            $toggleIcon.removeClass(toggleActiveIconClass);
            $toggleIcon.addClass(toggleDefaultIconClass);
            $toggleForm.slideUp();
            $formWithToggle.removeClass(switchClass);
        } else {
            $toggleForm.slideDown();
            $toggleText.html(toggleActiveTextValue);
            $toggleIcon.removeClass(toggleDefaultIconClass);
            $toggleIcon.addClass(toggleActiveIconClass);
            $formWithToggle.addClass(switchClass);
        }
    });

    $('.js-subnav-toggle').click(function(e) {
        e.preventDefault();

        var $this = $(this);
  
            if ($this.next().hasClass('active')) {
                $this.next().removeClass('active').slideUp(350);
            } else {
                $this.parent().parent().find('.js-subnav').removeClass('active').slideUp(350);
                $this.next().toggleClass('active').slideToggle(350);
            }
    });

    $('.js-arrowsubnav-toggle').click(function(e) {
        e.preventDefault();

        var $this = $(this);
            if ($this.parent().next().hasClass('active')) {
                $this.parent().next().removeClass('active').slideUp();
            } else {
                $this.parent().parent().parent().find('.js-subnav').removeClass('active').slideUp();
                $this.parent().next().toggleClass('active');
                $this.parent().next().slideToggle();
            }
    });

    $(".js-aside-subnav-toggle").click(function(e){
        e.preventDefault();
    
        var $this = $(this);
    
        if ($this.parent().next().hasClass('active')) {
            $this.parent().next().removeClass('active').slideUp();
        } else {
            $this.parent().parent().parent().find('.js-aside-subnav').removeClass('active').slideUp();
            $this.parent().next().toggleClass('active');
            $this.parent().next().slideToggle();
        }
    });

    // Simplebar
    new SimpleBar($('.secnav__list')[2]);

    // Phones
    $(".js-phones-toggle").click(function(e){
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(".js-header-phones").slideUp();
            $(this).removeClass('active');
        } else {
            if ($(window).width() < 992){
                $('.js-nav').hide();
            }
            $(".js-header-phones").slideDown();
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        }
    });

    // Select
    $('.js-form-select').selectpicker({
        size: 'auto',
    });

    // Tabs
    $('.tabs__link').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // Sliders
    $('.js-news-slider').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        responsive: [
        {
            breakpoint: 992,
            settings: {
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                infinite: false,
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: true,
            }
        },
        {
            breakpoint: 576,
            settings: {
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }
        ]
    });

    $('.js-hero-slider').slick({
        infinite: true,
        autoplay: true,
        accessibility: true,
        draggable: true,
        arrows: true,
        dots: true,
        fade:true,
        responsive: [
        {
            breakpoint: 576,
            settings: {
                infinite: true,
                autoplay: true,
                accessibility: true,
                draggable: true,
                dots: true,
                arrows:true,
            }
        },
        ]
    });

    $(window).on('orientationchange resize', function() {
        $('.js-news-slider').slick('resize');
        $('.js-hero-slider').slick('resize');
    });
    
    $('.js-make-appointment-toggle').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });
    
    $('.js-call-back-toggle').on('click', function(event) {
        event.preventDefault();
        $.magnificPopup.open({
            items: {
                src: $('#appointment-form'),
                focus: '#name',
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in',
                callbacks: {
                    beforeOpen: function () {
                        if ($(window).width() < 700) {
                            this.st.focus = false;
                        } else {
                            this.st.focus = '#name';
                        }
                    }
                }
            }
        });
    });
    
    $('body').magnificPopup({
        delegate: 'a[rel="gallery"]',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
    });
    $('.gallery').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{
        enabled:true
      }
      // other options
    });
});
