$( document ).ready(function() {
    app.init();
});

if($("body .dashboard-block").length == 0){
  console.log("k")
$(document).ajaxStart(function() {
  if($("body").hasClass("modal-open")){
     setTimeout(function(){
       $(".main-loader-box").show();
       $("body").addClass("loader-show");
      },100)
  }else{
    $(".main-loader-box").show();
       $("body").addClass("loader-show");
  }
});
$(document).ajaxStop(function() {
  if($("body").hasClass("modal-open")){
    setTimeout(function(){
      $(".main-loader-box").hide();
      $("body").removeClass("loader-show");
    },1500)
  }else{
    $(".main-loader-box").hide();
      $("body").removeClass("loader-show");
  }
   
});
}
const app = {
  init: function(){


      $(document).on("click",'.layout-menu-toggle',function(){
          if($(this).find('i').hasClass("bx-chevron-right")){
              $(this).find('i').removeClass("bx-chevron-right").addClass("bx-chevron-left")
              $('html').addClass("layout-compact").removeClass("layout-menu-collapsed").removeClass("layout-menu-hover")
          }else{
              $('html').removeClass("layout-compact").addClass("layout-menu-collapsed")
              $(this).find('i').removeClass("bx-chevron-left").addClass("bx-chevron-right")
              $(this).addClass("hide")
          }
      })
      $("#layout-menu").on("mouseover",function(){
        if(!$('html').hasClass("layout-compact")){
          $('html').addClass("layout-menu-hover")

        }
          // $(this).find('i').removeClass("bx-chevron-right").addClass("bx-chevron-left")
      })
      $('#layout-menu').on('mouseleave',function(){
        if(!$('html').hasClass("layout-compact")){
            $('html').removeClass("layout-menu-hover")
        }
        
        // $(this).find('i').removeClass("bx-chevron-left").addClass("bx-chevron-right")
      });
      $(".menu-item").on("click",function(){
        
         if(!$(this).hasClass("open-menu")){
            $(this).addClass("open-menu")
         }else{
            $(this).removeClass("open-menu")
         }
         $(this).find('.menu-sub').slideToggle('slow')
      })

      $(".filter-icon,.close-filter-btn").on('click',function(){
        if($(".filter-popup-block").hasClass("show")){
          $(".filter-popup-block").removeClass("show")
          $(".filter-popup-block").animate({
            width: 0
          },100)
        }else{
          $(".filter-popup-block").addClass("show")
          $(".filter-popup-block").animate({
            width: 330
          },100)
        }
        
      })
      $(".filter-row .search-show-hide").on("click",function(){
         var element = $(this).parents(".filter-row");
         var cursor_element = $(this).find("i.ti-minus");
         if(cursor_element.length > 0){
          $(this).html("<i class='ti ti-plus'></i>")
         }else{
          $(this).html("<i class='ti ti-minus'></i>")
         }
         $(element).find(".sidebar-item").toggle()
      })
      $("#downloadPDFBtn").on("click",function(){
          $(".buttons-pdf").trigger("click");
      })
      $("#downloadCSVBtn").on("click",function(){
          $(".buttons-csv").trigger("click");
      })
      $(".select2-init,.select2").select2();

      $(".breadcrumb .backlisting-link").attr("href","javascript:void(0)");
      $(".breadcrumb .backlisting-link").attr("title","");
      this.allowNumber();
      this.removeValidationMessage();
      this.initResponsive();
  },
  allowNumber:function(){
    $('.onlyNumericInput').on('keypress', function(event) {
        var charCode = (event.which) ? event.which : event.keyCode;

       var value = $(this).val();
       if (value.includes('.')  && charCode == 46 ) {
          event.preventDefault();
       }
        // Allow only digits (0-9) and some specific control keys
          if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46) {
              event.preventDefault();
          }
        
    });
  },
  removeValidationMessage: function(){
    $(".modal").attr("tabindex","n")
    $(document).on("change input",".custom-form .required-input",function(){
        var value = $(this).val();
        if (value !=''){
          $(this).parents(".form-group").find("label.error").remove()
        }
    })
  },
  initResponsive: function(){
    var viewportWidth = $(window).width();
    console.log(viewportWidth)
    // if(viewportWidth > 400 && viewportWidth < 500){
    //     var $element = $('.paginate_button.last');
            
    //       // Get the absolute position of the element
    //     var offset = $element.offset();
            
    //     // Get the current scroll position
    //     var scrollTop = $(window).scrollTop();
    //     var scrollLeft = $(window).scrollLeft();
            
    //         // Calculate the position relative to the viewport
    //     var relativeTop = offset.top - scrollTop;
    //     var relativeLeft = offset.left - scrollLeft;
    //     var elementWidth = $element.outerWidth();
    //     var elementHeight = $element.outerHeight();
    //     var relativeBottom = relativeTop + elementHeight;
    //     var relativeRight = relativeLeft + elementWidth;
    //     $(".dataTables_length label").attr("style","left:"+relativeLeft+"px")
    // }
    if( viewportWidth < 700){
      var $targetElement = $('.scrollable');
      $($targetElement).addClass("w-100")
      var $previousElement = $targetElement.parent("div");
      $previousElement.addClass('table-responsive text-nowrap w-100');
        $(".scrollable").DataTable({
            dom: "",
            searching: false,
            scrollX: true,
            scrollY: true,
            "ordering": false
           
            });
      }

      $("#dropdownUser").on("click",function(){
          $("#dropdownUserNav").toggleClass("show-nav")
      })
  }
}