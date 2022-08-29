$(document).ready(function () {
  function loadTable(page) {
    $.ajax({
      url: "ajax-pagination.php",
      type: "POST",
      data: { page_no: page },
      success: function (data) {
        $("#table").html(data);
      },
    });
  }
  loadTable();

  $(document).on("click", "#pagination a", function (e) {
    e.preventDefault();
    var pageId = $(this).attr("id");
    loadTable(pageId);
  });
});
