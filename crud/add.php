<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Roll</label>
            <input type="text" name="roll" />
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" />
        </div>
        <div class="form-group">
            <label>Group Name</label>
            <select name="group_name">
                <option value="" selected disabled>Select Class</option>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Database connection failed!");

                    $sql = "SELECT * FROM exam_result";

                    $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

                    while($row = mysqli_fetch_assoc($queryResult)) {
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['group_name']; ?></option>
                <?php } ?>

            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
