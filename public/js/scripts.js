
// User registration 

function registerUser(path){
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
              alert(responseData.message);
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(errorThrown);
          }
      })
}
