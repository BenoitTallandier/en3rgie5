/*===================================================================================*/
/*	SMOOTH SCROLL
/*===================================================================================*/ 
        smoothScroll.init();
/*===================================================================================*/
/*	LIGHTBOX
/*===================================================================================*/
      $(document).ready(function() {
        $('.lightbox').magnificPopup({type:'image'});
		$('.img_sociaux').rotateAnimation(-50);
      });

/*===================================================================================*/
/*	HEADER SHRINK
/*===================================================================================*/
      $(window).scroll(function () {
        if ($(document).scrollTop() <= $('.img_top').height()) {
          $('.navbar').removeClass('tiny');
		  $('#block_cat').css("margin-top","0px");
        } else {
		  //$('#content').addClass('content_scrolled');
          $('.navbar').addClass('tiny');		  
		  $('#block_cat').css("margin-top","14px");
          //$('.navbar').addClass('navbar-fixed-top');
		  //$('.content_scrolled').css('padding-top',$('.navbar').height())	
        }
      });
      
/*===================================================================================*/
/*	CLOSE NAVBAR DROPDOWN WHEN LINK CLICKED ON MOBILE
/*===================================================================================*/
    // call jRespond and add breakpoints
    var jRes = jRespond([
        {
            label: 'handheld',
            enter: 0,
            exit: 767
        },{
            label: 'tablet',
            enter: 768,
            exit: 979
        },{
            label: 'laptop',
            enter: 980,
            exit: 1199
        },{
            label: 'desktop',
            enter: 1200,
            exit: 10000
        }
    ]);

    // register enter and exit functions for a single breakpoint
    jRes.addFunc({
        breakpoint: 'handheld',
        enter: function() {
          $('.navbar-collapse a').click(function(){
              $(".navbar-collapse").collapse('hide');
          });
        }
    });