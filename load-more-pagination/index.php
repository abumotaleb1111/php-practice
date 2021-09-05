<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #pagination {
            margin: 10px 0;
        }

    </style>
</head>
<body>
    <table width="60%" border="1" cellspacing="0" align="center">
        <tr>
            <td align="center">
                <h1>Load more pagination with PHP & Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-data" colspan="2">
                <table id="load-data" width="60%" border="1" cellspacing="0" cellpading="0" align="center">
                   
                </table>
            </td>
        </tr>
        
    </table>

    <script src="js/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            function loadTable(page) {
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    data : {page_no: page},
                    success : function(data) {
                        if(data) {
                            $("#pagination").remove();
                            $("#table-data").append(data);
                        }else {
                            $("#load-more-btn").val("Finished");
                            $("#load-more-btn").prop("disabled", true);
                        }
                       
                    }

                }); 
            }
            loadTable();

            $(document).on("click", "#load-more-btn", function() {
                var id = $(this).data("id");

                loadTable(id);
            });

        


        });

    </script>

</body>
</html>