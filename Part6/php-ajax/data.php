<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border='1' cellspacing='0' cellpadding='10px' id='table'>
    <thead>
      <th>Sno.</th>
      <th>First Name</th>
      <th>Last Name</th>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Harsh</td>
        <td>arora</td>
      </tr>
    </tbody>
  </table>
  <input type='button'
    style='padding:6px 12px;border:none;background:#000;margin:10px 0;border-radius:5px;color:#fff;cursor:pointer'
    id='load-btn' value='See More' />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function() {
    $("#load-btn").on("click", function(e) {
      $.ajax({
        url: "ajax-load.php",
        type: "POST",
        success: function(data) {
          $("#table").html(data);
        }
      });
    });
  });
  </script>
</body>

</html>