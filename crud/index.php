<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Database connection failed!");

        $sql = "SELECT s.*, e.group_name AS group_name FROM student_details AS s JOIN exam_result AS e WHERE s.group_name = e.id";

        $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

        if(mysqli_num_rows($queryResult) > 0) {

    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Roll</th>
        <th>Name</th>
        <th>Age</th>
        <th>Group</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php while($studentInfo = mysqli_fetch_assoc($queryResult)) { ?>
            <tr>
                <td><?php echo $studentInfo["id"]; ?></td>
                <td><?php echo $studentInfo["roll"]; ?></td>
                <td><?php echo $studentInfo["name"]; ?></td>
                <td><?php echo $studentInfo["age"]; ?></td>
                <td><?php echo $studentInfo["group_name"]; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $studentInfo['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $studentInfo['id']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
    <?php }else {
        echo "<h2>No records found!</h2>";
    }

    mysqli_close($conn);

    ?>

</div>
</div>
</body>
</html>
