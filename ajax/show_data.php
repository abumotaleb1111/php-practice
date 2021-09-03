<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>
<body>
    <table width="60%" border="1" cellspacing="0" align="center">
        <tr>
            <td align="center">
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <br>
                <input type="button" id="load-btn" value="Load Data">
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <table width="60%" border="1" cellspacing="0" cellpading="0" align="center">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                    <!-- <tr>
                        <td align="center">1</td>
                        <td>Arfa</td>
                    </tr> -->
                </table>
            </td>
        </tr>
    </table>

    <script src="js/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#load-btn").on("click", function(e) {
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    success : function(data) {
                        $("#table-data").html(data);
                    }

                });

            });
        });

    </script>

</body>
</html>