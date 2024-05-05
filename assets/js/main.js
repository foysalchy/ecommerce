(function($,window){
    $(document).ready(function(){
        // mobile-menu-show
        $('header .top-header .mobile-menu-openar .bars').click(function(){
            $('.main-menu').addClass('menu-show');
            $('.menu-overly').addClass('ovshow');
            $('.ovshow').click(function(){
            $('.menu-overly').removeClass('ovshow');
            $('.main-menu').removeClass('menu-show');
            })
        });
        $('#cupon').on('input', function() {
                                      var href = new URL($('#applyCupon').prop('href'));
                                      href.searchParams.set('cp', this.value);
                                      $('#applyCupon').prop('href', href.toString())
                                    });
        // mobile-category-show
        var menu=$('header .main-menu .nav-bar .nav-menus').show();
        if(menu){
          $('#cat').click(function(){
              $('header .main-menu .nav-bar .nav-menus').hide();
              $('header .main-menu .nav-bar .header-category-wrap').show();
              $('.main-menu .collpase-menu-open #menu.active').removeClass('active');
              $(this).addClass('active');
          });
        }
        var categ=$('header .main-menu .nav-bar .header-category-wrap').show();
        if(categ){
            $('#menu').click(function(){
                $('header .main-menu .nav-bar .header-category-wrap').hide();
                $('header .main-menu .nav-bar .nav-menus').show();
                $('.main-menu .collpase-menu-open #cat.active').removeClass('active');
                $(this).addClass('active');
            });
        }
        $('#proopen2').hide();
        $('#proopen3').hide();
        
        $('.ofl').on('click', function () { 
            
              $('#proopen3a').html('');
             $('#proopen3').hide();
            $('#proopen').html('<label>Please Upload Proof Of Pickup Centre Fee<sup style="color: red;"></sup></label><input name="proof" type="file" required/>');
        });
        
        $('.ofl2').on('click', function () { 
           
            $('#proopen3a').html('<label>Please Upload Payment Screen Shot Here <sup style="color: red;"></sup></label><input name="proof" type="file" required/>');
            $('#proopen').html('');
             $('#proopen2').hide();
        });
         $('.ofl').click(function(){
             $('#proopen2').show();
         });
         $('.ofl2').click(function(){
             $('#proopen3').show();
         });
         
        $('.onl').on('click', function () { 
            $('#proopen').html('');
             $('#proopen2').hide();
              $('#proopen3a').html('');
             $('#proopen3').hide();
        });
        // not-home-category-filter
        
        $('.arrow').html('<div style="position: relative;display: inline-block;" class="arrow-in"><i class="icon-right icofont icofont-simple-right" style="display:none"></i><i class="icon-down icofont icofont-simple-down"></i></div>');
        $('header.not-home .main-menu .nav-bar .header-category-wrap').click(function(){
            $('header.not-home .main-menu .nav-bar .header-category-menu').slideToggle();
            $('header.not-home .main-menu .nav-bar .icon-right').fadeToggle();
            $('header.not-home .main-menu .nav-bar .icon-down').fadeToggle();
        });
        // submenu arrow-icon-add-auto
        $('ul').parent('li').prepend('<div style="position: absolute;right: 0;top: 20px;" class="arrow-in icon-down icofont icofont-caret-down"></div>');

        // submenu
        $('ul li').unbind('click').click(function(e){
            // sub-menu-arrow-icon-change
            if($(this).children('.arrow-in').hasClass('icofont-caret-down')){
                $(this).children('.arrow-in').removeClass('icofont-caret-down');
                $(this).children('.arrow-in').addClass('icofont-caret-right');
            }
            else if($(this).children('.arrow-in').hasClass('icofont-caret-right')){
                $(this).children('.arrow-in').removeClass('icofont-caret-right');
                $(this).children('.arrow-in').addClass('icofont-caret-down');
            }
            // submenu-dropdown
            $(this).children('ul').slideToggle();
            
           
        });
        $(".ddd").on("click", function() {
            var $button = $(this);
            var $input = $button.closest('.sp-quantity').find("input.quntity-input");
            $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
          });
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            responsive:[
                {
                    breakpoint:850,
                    settings:{
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint:600,
                    settings:{
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint:400,
                    settings:{
                        slidesToShow: 1,
                    }
                }
            ]

          });
          $('#someTab').tab('show')
        //   sticky sidebar
        if ($('#sticky').length) { // make sure "#sticky" element exists
		var el = $('#sticky');
		var stickyTop = $('#sticky').offset().top; // returns number
		var stickyHeight = $('#sticky').height();

        $(window).scroll(function() { // scroll event
           var limit = $('.footer-top').offset().top - stickyHeight - 170;

			var windowTop = $(window).scrollTop(); // returns number

			if (stickyTop < windowTop) {
				el.css({
					position: 'fixed',
					top: 0
				});
			} else {
				el.css('position', 'static');
			}

			if (limit < windowTop) {
				var diff = limit - windowTop;
				el.css({
					top: diff
				});
			}
		});
    }
      //   sticky sidebar
      if ($('#sticky2').length) { // make sure "#sticky" element exists
      var el = $('#sticky2');
      var stickyTop = $('#sticky2').offset().top; // returns number
      var stickyHeight = $('#sticky2').height();

      $(window).scroll(function() { // scroll event
         var limit = $('.products').offset().top - stickyHeight - 170;

          var windowTop = $(window).scrollTop(); // returns number

          if (stickyTop < windowTop) {
              el.css({
                  position: 'fixed',
                  top: 0
              });
          } else {
              el.css('position', 'static');
          }

          if (limit < windowTop) {
              var diff = limit - windowTop;
              el.css({
                  top: diff
              });
          }
      });
  }
        
    });
   
})(jQuery, window);