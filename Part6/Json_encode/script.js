$(document).ready(function () {
  $(".spinner-border").hide();
  $.ajax({
    url: "fetch-json.php",
    type: "POST",
    // data: { id: 2 },
    dataType: "JSON",
    beforesend: $(".spinner-border").show(),
    success: function (data) {
      $.each(data, function (key, value) {
        $("#table").append(
          "<tr>" +
            "<td>" +
            value.id +
            "." +
            "</td>" +
            "<td>" +
            value.fname +
            "</td>" +
            "<td>" +
            value.lname +
            "</td>" +
            "</tr>"
        );
        $(".spinner-border").hide();
      });
    },
  });
  // $.getJSON("fetch-json.php", $(".spinner-border").show(), function (data) {
  //   $.each(data, function (key, value) {
  //     $(".load-data").append(
  //       value.id + "." + " " + value.fname + " " + value.lname + "<br>"
  //     );
  //     $(".spinner-border").hide();
  //   });
  // });
});
