import "../css/style.css"




let $ = jQuery; 
 

$( "li.menu-item" ).hover(function() {  // mouse enter
    $( this ).find( " > .sub-menu" ).slideDown(300); // display immediate child
    $(this).find('> .nav-arrow').addClass('fa-chevron-up');
    


}, function(){ // mouse leave
    if ( !$(this).hasClass("current_page_item") ) {  // check if current page
        $( this ).find( ".sub-menu" ).slideUp(300); // hide if not current page
        $(this).find('> .nav-arrow').removeClass('fa-chevron-up');


    }
});

let arrowMenu = $('.menu-item').find("> .sub-menu"); 
console.log(arrowMenu);
if($(arrowMenu)){ 
    arrowMenu.parent().append('<i class="fas fa-chevron-down nav-arrow "></i>');
}
