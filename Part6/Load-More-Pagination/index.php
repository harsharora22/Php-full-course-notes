<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PHP & Ajax Pagination</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="data">
    <table id="table" border="1" cellspacing="0" cellpadding="10px" width="40%">
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script src="/php-ajax/js/jquery.js"></script> -->
  <script>
  $(document).ready(function() {
    function loadTable(page) {
      // $.ajax({
      //   url: "pagination.php",
      //   type: "POST",
      //   data: {
      //     pageNo: page
      //   },
      //   success: function(data) {
      //     if (data) {
      //       $("#pagination").remove();
      //       $("#table").append(data);
      //     } else {
      //       $("#ajaxbtn").html("Finished")
      //       $("#ajaxbtn").css("background", "rgb(171, 171, 171)")
      //       $("#ajaxbtn").prop("disabled", true);
      //     }
      //   },
      // });
      $.post(
        "pagination.php", {
          pageNo: page
        },
        function(data) {
          if (data) {
            $("#pagination").remove();
            $("#table").append(data);
          } else {
            $("#ajaxbtn").html("Finished")
            $("#ajaxbtn").css("background", "rgb(171, 171, 171)")
            $("#ajaxbtn").prop("disabled", true);
          }
        }
      );
    }
    loadTable();

    $(document).on("click", "#ajaxbtn", function() {
      $("#ajaxbtn").html("Loading...")
      var id = $("#ajaxbtn").data("pid");
      loadTable(id);
    })
  });
  </script>
</body>

</html>