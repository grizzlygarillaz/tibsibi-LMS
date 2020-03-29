function TransformNav() {
    if ($("#mySidebar").width() == "0") {
        openNav();
    }else
    {
        closeNav();
    }
}

function openNav() {
    $("#mySidebar").width(250);
    if ($(document).width() >= 450){
        $("#main").css('margin-left',"250px");
    }
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    $("#mySidebar").width(0);
    $("#main").css('margin-left',"0px");
    $("#MoveNav").blur();
}