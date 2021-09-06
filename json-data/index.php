<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <style>
        body {
            /* position: relative;
            display: flex;
            justify-content: center; */
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td><h1>Read JSON Data</h1></td>
        </tr>
        <tr>
            <td id="load-data"></td>
        </tr>

    </table>


    

    <script src="js/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                // url: "https://jsonplaceholder.typicode.com/posts",
                url: "json/data.json",
                type: "GET",
                success: function(data) {
                   $.each(data, function(key, value) {
                    $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>");
                   });
                }
            });
        });

    </script>

</body>
</html>