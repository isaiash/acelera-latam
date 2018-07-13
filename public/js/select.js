$(document).ready(
  function(){
    $("#content").find("[id^='tab']").hide(),
    $("#tabs li:nth-child(1)").attr("id","current"),
    $("#content #tab1").fadeIn(),
    $("#tabs a").click(
      function(t){
        t.preventDefault(),
        "current"!=$(this).closest("li").attr("id")&&($(".jspPane , .jspDrag").css("top","0px"),
        $(".cont_funcion").scrollTop("0px"),
        $("#content").find("[id^='tab']").hide(),
        $("#tabs li").attr("id",""),
        $(this).parent().attr("id","current"),
        $("#"+$(this).attr("name")).fadeIn())
      }
    )
  }
);
