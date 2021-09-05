<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$limit = 3;
// $page = "";

if(isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
}else {
    $page = 0;
}

// $offset = ($page - 1) * $limit;

$sql = "SELECT * FROM students LIMIT $page, $limit";

$queryResult = mysqli_query($conn, $sql) or die("Query failed!");

$output = "";
if(mysqli_num_rows($queryResult) > 0) {
    $output = '<table width="60%" border="1" cellspacing="0" cellpading="0" align="center">
                   <tr>
                       <th>Id</th>
                       <th>Name</th>
                   </tr>';

                   while($row = mysqli_fetch_assoc($queryResult)) {
                       $id = $row['id'];
                       $output .= "<tr>
                                        <td align='center' width='60px'>{$row['id']}</td>
                                        <td>{$row['first_name']} {$row['last_name']}</td>
                                   </tr>";
                   }

    $output .= "<tr>
                    <td align='center' colspan='2'>
                        <div id='pagination'>
                            <input type='button' id='load-more-btn' data-id='{$id}' value='Load more'>
                        </div>
                    </td>
               </tr>";

    $output .= '</table>';

    echo $output;

}else {
    echo "";
}






?>