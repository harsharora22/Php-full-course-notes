function loadTable() {
  fetch("php/load-table.php")
    .then((response) => response.json())
    .then((data) => {
      var tbody = document.querySelector("#table-data #tbody");
      if (data["empty"]) {
        console.log(tbody);
        tbody.innerHTML =
          "<td colspan='6' align='center'><h3>No record found.</h3></td>";
      } else {
        var tr = "";
        for (const d in data) {
          tr += `<tr>
          <td align='center'>${data[d].id}</td>
            <td>${data[d].name}</td>
            <td>${data[d].cname}</td>
            <td align='center'><button class='edit-btn' onclick='editRecord(${data[d].id})'>Edit</button></td>
            <td align='center'><button Class='delete-btn' onclick='deleteRecord(${data[d].id})'>Delete</button></td>
            </tr>`;
        }
        tbody.innerHTML = tr;
      }
    })
    .catch((error) => {
      showMessage("error", "Can't Fetch data.");
    });
}
loadTable();

var btn = document.getElementById("save-button");
btn.addEventListener("click", (e) => {
  e.preventDefault();
  var fname = document.getElementById("fname").value;
  var classes = document.getElementById("class").value;
  var address = document.getElementById("address").value;
  if (fname == "" || classes == "" || address == "") {
    alert("All fields are required.");
  } else {
    let formData = {
      fname: fname,
      classes: classes,
      address: address,
    };
    var jsonData = JSON.stringify(formData);
    fetch("php/insert-data.php", {
      method: "POST",
      body: jsonData,
      headers: {
        "Content-type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((result) => {
        if (result.insert == "success") {
          showMessage("success", "Data Inserted Successfully.");
          loadTable();
        } else {
          showMessage("error", "Data is not Inserted");
        }
      })
      .catch((error) => {
        showMessage("error", "Data not Inserted.");
      });
  }
});
function showMessage(type, text) {
  if (type == "error") {
    var messageBox = document.getElementById("error-message");
  } else {
    var messageBox = document.getElementById("success-message");
  }
  messageBox.innerHTML = text;
  messageBox.style.display = "block";
  setTimeout(() => {
    messageBox.style.display = "none";
  }, 3000);
}
