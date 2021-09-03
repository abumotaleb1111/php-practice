<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$limit = 3;
$page = "";

if(isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
}else {
    $page = 1;
}

$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";

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

    $sql2 = "SELECT * FROM students";
    $queryResult2 = mysqli_query($conn, $sql2) or die("Query failed!");
    $total_records = mysqli_num_rows($queryResult2);
    $total_page = ceil($total_records / $limit);

    $output .= '<div id="pagination">';

    for($i = 1; $i <= $total_page; $i++) {
        if($i == $page) {
            $active = "active";
        }else {
            $active = "";
        }

        $output .= "<a class='{$active}' href='' id='{$i}'>{$i}</a>";
    }

    $output .= '</div>';


    echo $output;

}else {
    echo "<h2 style='text-align:center; color:red;'>No record found.</h2>";
}






?>