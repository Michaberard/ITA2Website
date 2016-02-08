$(document).ready(function() {
    $("#content").load("Pages/Today.html");
$('a').click(function(){
        
    var page = $(this).attr('href' );
    $("#content").load(page);
    return false;
});
    
});

