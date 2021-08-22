<?php
    include 'header.php';
    include 'config.php';

    if(isset($_POST['deletebtn'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM student_details WHERE id = $id";

        $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

        header("Location: http://localhost:8080/crud/index.php");

        mysqli_close($conn);

    }

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
