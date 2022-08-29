$(document).ready(function () {
  $(".spinner-border").hide();
  // $.ajax({
  //   url: "data.json",
  //   type: "GET",
  //   beforesend: $(".spinner-border").show(),
  //   success: function (data) {
  //     // $(".load-data").append(data.body);
  //     $.each(data, function (key, value) {
  //       $(".load-data").append(
  //         value.userId + "." + "   " + value.userName + "<br>"
  //       );
  //     });
  //     $(".spinner-border").hide();
  //   },
  // });
  $.getJSON(
    "https://jsonplaceholder.typicode.com/posts/",
    $(".spinner-border").show(),
    function (data) {
      // $(".load-data").append(data.body);
      $.each(data, function (key, value) {
        $(".load-data").append(value.id + "." + "   " + value.title + "<br>");
      });
      $(".spinner-border").hide();
    }
  );
});
