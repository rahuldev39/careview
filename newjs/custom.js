$(document).ready(function() {
    $("#scroll").click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var o = $(this.hash);
            if ((o = o.length && o || $("[name=" + this.hash.slice(1) + "]")).length) {
                var e = o.offset().top - 180;
                return $("html,body").animate({
                    scrollTop: e
                }, 1e3), !1
            }
        }
        
        
    }),
    
     

    $(".navbar-light .navbar-nav .nav-link").click(function() {
        $(".navbar-collapse").removeClass("show")
    }),
    
        $('.navbar-light .navbar-nav .nav-link').click(function(){
        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        
    }), 
      
       
  
 
    
    
    $(".floorPlan").slick({
        dots: !0,
        infinite: false,
        autoplay: true,
        speed: 2000,
        slidesToShow: 2,
        slidesToScroll: 2,
        nextArrow: !1,
        prevArrow: !1,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    }), $(".Specificationjs").slick({
        dots: !0,
       slidesToShow: 3,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 2000,
        nextArrow: !1,
        prevArrow: !1,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    })
    
   
    $(".floorPlan a").fancybox();
     $(".site-map a").fancybox();
     $(".blueBg a").fancybox();
    
   
    
  
});