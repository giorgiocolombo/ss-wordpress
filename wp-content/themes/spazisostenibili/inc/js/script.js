$(function(){
  AOS.init();

    // Preloader
    
    $(document).ready(function() {
      $('#bosco2').imagesLoaded(function() {
        $('.preloader').fadeOut("slow");
      });
    });

    // Navigation menu 

    $(".menu_icon").click(function(){
        if ($(".longbar").hasClass("longbaractive")){
            $(".longbar").removeClass("longbaractive");
            $(".shortbar").removeClass("shortbaractive");
            $(".menu").removeClass("menuactive");
        }
        else{
            $(".longbar").addClass("longbaractive");
            $(".shortbar").addClass("shortbaractive");
            $(".menu").addClass("menuactive");
            if ($(".search_form_container").hasClass("search_form_container_active")) {
                $(".search_form_container").removeClass("search_form_container_active");
            }
        }
    });
    
    //Scroll makes topbar bgc 

    if ($("body").hasClass("home")){
      $(window).scroll(function() {
          if ($(window).scrollTop() > 0) {
            $(".topbar").addClass("topbarbgc");
            
          } else {
            $(".topbar").removeClass("topbarbgc");
        }
      });
    }
    else {
      $(".topbar").addClass("topbarbgc");
    }
    if ($("body").hasClass("error404")){
      $(".topbar").css("background-color","rgba(0,0,0,0)");
      $(".menu").css("background-color","rgba(255,255,255,1)");
      $("input").css("background-color","rgba(255,255,255,1)");
    }
    

    // Click on search icon open search bar and once opened submit form

    $(".search").click(function(){
        if ($(".search_form_container").hasClass("search_form_container_active")) {
            $("#search_form").submit();
          } else {
            $(".search_form_container").addClass("search_form_container_active");
            if ($(".longbar").hasClass("longbaractive")){
                $(".longbar").removeClass("longbaractive");
                $(".shortbar").removeClass("shortbaractive");
                $(".menu").removeClass("menuactive");
            }
          }
    })

    // Click on any element but topbar makes searchbar or navmenu to close

    $("body > *").not("body > .topbar").click(function() {
        if ($(".search_form_container").hasClass("search_form_container_active")) {
            $(".search_form_container").removeClass("search_form_container_active");
        }
        if ($(".longbar").hasClass("longbaractive")){
            $(".longbar").removeClass("longbaractive");
            $(".shortbar").removeClass("shortbaractive");
            $(".menu").removeClass("menuactive");
        }
    })


    // Gallery

    function arrow_check(){
      var currentImg = $(".img_active");
      var nextImg = currentImg.next();
      var prevImg = currentImg.prev();
      if(!nextImg.length){
        $(".arrow_next").css("display","none")
      }
      else{
        $(".arrow_next").css("display","flex")
      }
      if(!prevImg.length){
        $(".arrow_prev").css("display","none")
      }
      else{
        $(".arrow_prev").css("display","flex")
      }
    }
    arrow_check()

    $(".arrow_next").on("click", function(){
      var currentImg = $(".img_active");
      var nextImg = currentImg.next();

      if(nextImg.length){        
        currentImg.addClass("img_scrolled");
        currentImg.removeClass("img_active");
        nextImg.addClass("img_active");
        arrow_check()
      }
      
    })
    $(".arrow_prev").on("click", function(){
      var currentImg = $(".img_active");
      var prevImg = currentImg.prev();

      if(prevImg.length){
        currentImg.removeClass("img_active");
        prevImg.addClass("img_active");
        prevImg.removeClass("img_scrolled");
        arrow_check()
      }
    })
    
    var element = $('.gallery_page_gallery');
    var gallery = new Hammer(element[0]);
    
    gallery.on('swipeleft', function(ev) {
      var currentImg = $(".img_active");
      var nextImg = currentImg.next();

      if(nextImg.length){        
        currentImg.addClass("img_scrolled");
        currentImg.removeClass("img_active");
        nextImg.addClass("img_active");
        arrow_check()
      }
    });
    
    gallery.on('swiperight', function(ev) {
      var currentImg = $(".img_active");
      var prevImg = currentImg.prev();

      if(prevImg.length){
        currentImg.removeClass("img_active");
        prevImg.addClass("img_active");
        prevImg.removeClass("img_scrolled");
        arrow_check()
      }
    });
    
  });
  
  