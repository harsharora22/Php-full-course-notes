<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PHP & Ajax Pagination</title>
  <link rel="stylesheet" href="style.css?id=2" />
</head>

<body>
  <div class="data">

  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script src="/php-ajax/js/jquery.js"></script> -->
  <script>
  $(document).ready(function() {
    function loadTable(page) {
      $.ajax({
        url: "ajax-pagination.php",
        type: "POST",
        data: {
          page_no: page
        },
        success: function(data) {
          $(".data").html(data);
        },
      });
    }
    loadTable();

    $(document).on("click", "#pagination a", function(e) {
      e.preventDefault();
      var pageId = $(this).attr("id");
      loadTable(pageId);
    });
  });
  </script>
</body>

</html>