<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    if(isset($_POST['showbtn'])) {
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Database connection failed!");

        $id = $_POST['id'];

        $sql = "SELECT * FROM student_details WHERE id = $id";

        $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

        if(mysqli_num_rows($queryResult) > 0) {

            while($studentInfo = mysqli_fetch_assoc($queryResult)) {
    

    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Roll</label>
            <input type="hidden" name="id"  value="<?php echo $studentInfo['id']; ?>" />
            <input type="text" name="roll" value="<?php echo $studentInfo['roll']; ?>" />
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $studentInfo['name']; ?>" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" value="<?php echo $studentInfo['age']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php
            $sqlOne = "SELECT * FROM exam_result";

            $queryResultOne = mysqli_query($conn, $sqlOne) or die("Query Failed");

            if(mysqli_num_rows($queryResultOne) > 0) {
                echo '<select name="group_name">';

                while($row = mysqli_fetch_assoc($queryResultOne)) { 
                    if($row['id'] == $studentInfo['group_name']) {
                        $selected = "selected";
                    }else {
                        $selected = "";
                    }
                ?>

                    <option <?php echo $selected; ?>  value="<?php echo $row['id']; ?>"><?php echo $row['group_name']; ?></option>

               <?php }
                
                echo '</select>';

            }

          ?>

        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
            }
        }
    }

    ?>
</div>
</div>
</body>
</html>
