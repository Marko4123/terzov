$(document).ready(function(e) {
  $("#frmContact").on("submit", function(e) {
    e.preventDefault();
    $("#loader-icon").show();
    var valid;
    valid = validateContact();
    if (valid) {
      $.ajax({
        url: "../test/mail.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          $("#mail-status").html(data);
          $("#loader-icon").hide();
        },
        error: function() {}
      });
    }
  });

  function validateContact() {
    var valid = true;
    var message = "";
    var file_size;
    var ext;
    $(".demoInputBox").css({
      "background-color": "",
      border: "1px solid #ccc"
    });
    $(".info-form").html("");
    if (!$("#name").val() || !$("#email").val() || !$("#comment").val()) {
      message =
        "<div class='validation-error'><p><i class='fas fa-times'></i> Моля, въведете всички задължителни полета.</p></div>";
      $("#mail-status").html(message);
      valid = false;
    }
    if (
      !$("#email")
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      message =
        "<div class='validation-error'><p><i class='fas fa-times'></i> Моля, въведете валиден email.</p></div>";
      $("#mail-status").html(message);
      valid = false;
    }
    /*if(!$("#captcha").val()) {
		$("#captcha-info").html("(Задължително)");
		$("#captcha").css({'background-color':'#FFFFFF', 'border': '1px solid red'});
		valid = false;
	}*/
    return valid;
  }
});
