$(window).scroll(function() {     
      
    var scroll = $(window).scrollTop();
      if (scroll > 0) {
          $("#nav").addClass("shadow");
      }
      else {
          $("#nav").removeClass("shadow");
      }
  });

  $(document).ready(function() {
    
        $( ".judul-card-1" ).hover(
        function() {
        $(this).addClass('text-danger').css('cursor', 'pointer'); 
        }, function() {
        $(this).removeClass('text-danger');
        }
    );
  });

  $(document).ready(function() {
    
        $( ".card-1" ).hover(
        function() {
        $(this).removeClass('shadow-sm').addClass('shadow').css('cursor', 'pointer'); 
        }, function() {
        $(this).removeClass('shadow').addClass('shadow-sm');
        }
    );
  });

  $(document).ready(function() {
    
        $( ".footer-list" ).hover(
        function() {
        $(this).removeClass('text-white').addClass('text-danger').css('cursor', 'pointer'); 
        }, function() {
        $(this).removeClass('text-danger').addClass('text-white');
        }
    );
  });