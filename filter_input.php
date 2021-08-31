<?php
if(isset($_REQUEST['email-btn'])) {
    if(filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
        echo "Email is valid.<br>";
    }else {
        echo "Email is not valid.<br>";

    }

}


if(isset($_REQUEST['marks-btn'])) {
    $options = array(
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        ) 
    );

    if(filter_input(INPUT_POST, "marks", FILTER_VALIDATE_INT, $options)) {
        echo "Marks is valid.<br>";
    }else {
        echo "Marks is not valid.<br>";

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form email -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <table>
            <tr>
                <td>Email: </td>
                <td>
                    <input type="email" name="email">
                </td>
                <td>
                    <input type="submit" name="email-btn" value="Submit">
                </td>
            </tr>
        </table>
    </form>

    <br>
    
    <!-- Form marks  -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <table>
            <tr>
                <td>Marks: </td>
                <td>
                    <input type="number" name="marks">
                </td>
                <td>
                    <input type="submit" name="marks-btn" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>