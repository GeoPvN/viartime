
$(document).ready(function(){
 $(".filter-button").click(function(){
    $("#demo").css("display", "none");
    $("#filter").toggle(500);
    });

$(".new-post-button").click(function(){
        $("#filter").css("display", "none");
        $("#demo").toggle(500);
        });

 $(".add-post-button").click(function(){
   $("#demo").toggle(500);
 });
 $(".filter-save-button").click(function(){
    $("#filter").toggle(500);
  });
 
});
