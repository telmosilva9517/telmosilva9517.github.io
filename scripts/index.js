// Add Slide Squares
for( var i = 0; i < $("#progress article").length; i++){
    $("#progress ul").append("<div class='square progress_border'></div>");
}
$("#progress div").eq(0).addClass("active_square")
// -----------------

// Create Slide
var progress_article_index = 0;
$("#progress article").hide();

function progress_slide(){
    // Hide
    $("#progress article").hide();
    $("#progress div").eq(progress_article_index).removeClass("active_square");

    //Next
    progress_article_index++;
    if(progress_article_index > $("#progress article").length - 1){progress_article_index = 0;}

    //Show
    $("#progress div").eq(progress_article_index).addClass("active_square");
    $("#progress article").eq(progress_article_index).show();

    // Repeat
    setTimeout(progress_slide, 5000);
}

progress_slide();
// ----
