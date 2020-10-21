import "../css/style.css"




let $ = jQuery; 

let arrowMenu = $('.menu-item').find("> .sub-menu"); 
console.log(arrowMenu);
if($(arrowMenu)){ 
    arrowMenu.parent().append('<i class="fal fa-angle-down"></i>');
}


jQuery(document).ready(function ($) {
    $(".sub-menu").hide();
    $(".current_page_item .sub-menu").show();
    $("li.menu-item").click(function (event) { // mouse CLICK instead of hover
        // Only prevent the click on the topmost buttons
        if ($('.sub-menu', this).length >=1) {
            event.preventDefault();
        }
        // First hide any open menu items
        $(this).find(".sub-menu").slideToggle(300); // display child
        $(this).find(".fal").toggleClass('fa-angle-up');
        
        

        event.stopPropagation();
    });
});
