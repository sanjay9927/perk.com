
// User registration 

function registerUser(path){
  $("#loading_img").show();
  $("#message").html("");
  $.ajax({
          type: "post",
          url: path,
          data: { 
             first_name : $("[name=prefix_first_name]").val(),
             last_name  : $("[name=prefix_last_name]").val(),
             email      : $("[name=prefix_email]").val()

          },
          contentType: "application/x-www-form-urlencoded",
          success: function(responseData, textStatus, jqXHR) {
             setTimeout(function(){
              $("#loading_img").hide();
              $("#message").html(responseData.message);
             },1000);
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(errorThrown);

          }
      })
  return false;
}
