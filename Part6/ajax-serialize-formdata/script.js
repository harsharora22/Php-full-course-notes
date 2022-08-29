$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();
    let name = $("#name").val();
    let age = $("#age").val();
    if (
      name == "" ||
      age == "" ||
      !$("input:radio[name=gender]").is(":checked")
    ) {
      $("#response").fadeIn();
      $("#response")
        .removeClass("success")
        .addClass("error")
        .html("All feilds are required!");
    } else {
      // $("#response").html($(".form").serialize());
      $.ajax({
        url: "save-form.php",
        type: "POST",
        data: $(".form").serialize(),
        beforesend: function () {
          $("#response").fadeIn();
          $("#response")
            .removeClass("error")
            .addClass("success")
            .html("Loading...");
        },
        success: function (data) {
          $("#response").fadeIn();
          $("#response").removeClass("error").addClass("success").html(data);
        },
      });
    }
  });
});
