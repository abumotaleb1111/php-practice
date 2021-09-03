<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$search = $_POST['search'];

$sql = "SELECT * FROM students WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' ";

$queryResult = mysqli_query($conn, $sql) or die("Query failed!");

$output = "";
if(mysqli_num_rows($queryResult) > 0) {
    $output = '<table width="60%" border="1" cellspacing="0" cellpading="0" align="center">
                   <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th colspan="2">Action</th>
                   </tr>';

                   while($row = mysqli_fetch_assoc($queryResult)) {
                       $output .= "<tr>
                                        <td align='center' width='60px'>{$row['id']}</td>
                                        <td>{$row['first_name']} {$row['last_name']}</td>
                                        <td width='60px' align='center'><button  style='cursor:pointer;' class='edit-btn' data-eid='{$row['id']}'>Edit</button></td>
                                        <td width='60px' align='center'><button  style='cursor:pointer;' class='delete-btn' data-id='{$row['id']}'>Delete</button></td>
                                   </tr>";
                   }
    $output .= '</table>';

    echo $output;

}else {
    echo "<h2 style='text-align:center; color:red;'>No record found.</h2>";
}






?>