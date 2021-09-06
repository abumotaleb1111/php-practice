<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>
<body>
    <table id="load-data" width="70%" border="1" align="center">
        <tr>
            <td colspan="5" align="center"><h1>JSON ENCODE</h1></td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
    </table>

    

    <script src="js/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "fetch-json-data.php",
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    $.each(data, function(key, value) {
                        $("#load-data").append("<tr><td>"+value.id+"</td><td>"+value.name+"</td><td>"+value.age+"</td><td>"+value.gender+"</td><td>"+value.country+"</td></tr>");
                    });
                }
            });


        });

    </script>

</body>
</html>