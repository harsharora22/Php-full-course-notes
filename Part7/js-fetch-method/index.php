<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PHP & Ajax CRUD</title>
   <link rel="stylesheet" href="css/style.css?id=6">
</head>

<body>
   <table id="main" border="0" cellspacing="0">
      <tr>
         <td id="header">
            <h1>PHP & JS Fetch CRUD</h1>

            <div id="search-bar">
               <label>Search :</label>
               <input type="text" id="search" autocomplete="off">
            </div>
         </td>
      </tr>
      <tr>
         <td id="table-form">
            <form id="addForm">
               First Name : <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Class Name: <input type="text" id="class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Address: <input type="text" id="address">
               <input type="submit" id="save-button" value="Save">
            </form>
         </td>
      </tr>
      <tr>
         <td id="table-data">
            <table border="1" width="100%" cellspacing="0" cellpadding="10px">
               <tr>
                  <th width="60px">Id</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th width="90px">Edit</th>
                  <th width="90px">Delete</th>
               </tr>
               <tbody id="tbody">

               </tbody>
            </table>
   </table>
   <div id="error-message"></div>
   <div id="success-message"></div>
   <div id="modal">
      <div id="modal-form">
         <h2>Edit Form</h2>
         <table cellpadding="10px" width="100%">
            <tr>
               <td width='90px'>First Name</td>
               <td><input type='text' id='edit-fname'>
                  <input type='text' id='edit-id'>
               </td>
            </tr>
            <tr>
               <td>Last Name</td>
               <td><input type='text' id='edit-lname'></td>
            </tr>
            <tr>
               <td></td>
               <td><input type='submit' id='edit-submit' value='save'></td>
            </tr>
         </table>
         <div id="close-btn">X</div>
      </div>
   </div>
   <script src="js/fetch.js?e=675"></script>

</body>





</html>