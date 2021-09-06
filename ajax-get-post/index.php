<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <style>
        body {
            position: relative;
            display: flex;
            justify-content: center;
        }

      

        .error-message {
            background: #EFDCDD;
            color: red;
            padding: 10px;
            margin: 10px;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        .success-message {
            background: #DEF1D8;
            color: green;
            padding: 10px;
            margin: 10px;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        .process-message {
            background: #EFDCDD;
            color: #377084;
            padding: 10px;
            margin: 10px;
            position: absolute;
            right: 15px;
            top: 15px;
        }

    </style>
</head>
<body>
   <div>
   <form action="" method="POST" id="submit-form">
        <table cellpadding="7">
            <tr>
                <td>First Name: </td>
                <td>
                    <input type="text" name="first_name" id="first_name">
                </td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td>
                    <input type="text" name="last_name" id="last_name">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="button" name="submit" id="submit" value="Save Form">
                </td>
            </tr>
        </table>
    </form>
    <div id="response"></div>
   </div>



    

    <script src="js/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").click(function() {
                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();

                if(first_name == "" || last_name == "") {
                    $("#response").fadeIn();
                    $("#response").removeClass('success-message').addClass('error-message').html("All fields are required!");
                    setTimeout(function() {
                        $("#response").fadeOut("slow");
                    }, 3000);
                }else {
                    $.post(
                        "save_form.php",
                        $("#submit-form").serialize(),
                        function(data) {
                            if(data == 1) {
                                $("#submit-form").trigger("reset");
                                $("#response").fadeIn();
                                $("#response").removeClass('error-message').addClass('success-message').html("Data saved successfully!");
                                setTimeout(function() {
                                    $("#response").fadeOut("slow");
                                }, 3000);
                            }
                        }
                    );
                }

            });
        


        });

    </script>

</body>
</html>