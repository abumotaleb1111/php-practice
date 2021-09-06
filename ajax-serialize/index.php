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
                <td>Name: </td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>Age: </td>
                <td>
                    <input type="number" name="age" id="age">
                </td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                    <input type="radio" name="gender" id="gender" value="Male">Male
                    <input type="radio" name="gender" id="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>District: </td>
                <td>
                    <select name="country" id="">
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Thakurgaon">Thakurgaon</option>
                    </select>
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
                var name = $("#name").val();
                var age = $("#age").val();

                if(name == "" || age == "" || !$('input:radio[name=gender]').is(':checked')) {
                    $("#response").fadeIn();
                    $("#response").removeClass('success-message').addClass('error-message').html("All fields are required!");
                    setTimeout(function() {
                        $("#response").fadeOut("slow");
                    }, 3000);
                }else {
                    $.ajax({
                        url: "save_form.php",
                        type: "POST",
                        data: $("#submit-form").serialize(),
                        beforesend: function() {
                            $("#response").fadeIn();
                            $("#response").removeClass('success-message error-message').addClass('error-message').html("Loading...");
                        },
                        success: function(data) {
                            $("#submit-form").trigger("reset");
                            $("#response").fadeIn();
                            $("#response").removeClass('error-message').addClass('success-message').html(data);
                            setTimeout(function() {
                                $("#response").fadeOut("slow");
                            }, 3000);
                        }
                    });
                }

            });
        


        });

    </script>

</body>
</html>