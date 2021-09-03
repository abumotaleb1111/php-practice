<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$edit_id = $_POST['edit_id'];

$sql = "SELECT * FROM students WHERE id = '$edit_id' ";

$queryResult = mysqli_query($conn, $sql) or die("Query failed!");

$output = "";
if(mysqli_num_rows($queryResult) > 0) {
    while($row = mysqli_fetch_assoc($queryResult)) {

    $output = "<tr>
                   <td>First Name</td>
                    <td>
                        <input type='hidden' id='edit_id' value='{$row["id"]}'>
                        <input type='text' id='edit_first_name' value='{$row["first_name"]}'>
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type='text' id='edit_last_name' value='{$row["last_name"]}'>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' id='update-btn' value='Update Info'>
                    </td>
                </tr>";
    }

    echo $output;

}else {
    echo "<h2 style='text-align:center; color:red;'>No record found.</h2>";
}






?>