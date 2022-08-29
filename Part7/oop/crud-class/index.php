<style>
.pagination {
   display: flex;
}

li {
   list-style: none;
   margin: 0 10px;
}

a {
   text-decoration: none;
   padding: 6px 10px;
   background: red;
   color: white;
}

.active {
   background: blue;
}
</style>
<?php
include "database.php";
$obj = new database();

// $obj->insert('users', ['fname' => 'Harsh', 'lname' => 'arora']);
// echo "Insert result is: ";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->update('users', ['fname' => 'Harsh', 'lname' => 'preet'], 'id=18');
// echo "Updated result is: ";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->delete("users", 'id=18');
// echo "<br>Deleted result is: ";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->sql("SELECT * FROM users");
// echo "<br>Selected result is: ";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

$obj->select("users", "*", null, null, null, 3);
echo "<br>Selected result is: ";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";

echo $obj->pagination("users", null, null, 3);