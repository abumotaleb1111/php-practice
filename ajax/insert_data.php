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
        }

        #success-message {
            background: #DEF1D8;
            color: green;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        #error-message {
            background: #EFDCDD;
            color: red;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        #modal {
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: none;
        }

        #modal-form {
            background: #fff;
            width: 20%;
            position: relative;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            border-radius: 4px;
        }

        #modal-form h2 {
            margin: 0 0 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #000;  
        }

        #close-btn {
            background: red;
            color:white;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            position: absolute;
            top: -12px;
            right: -12px;
            cursor: pointer;
        }

        #pagination {
            text-align: center;
            margin: 15px 0;
        }

        #pagination a{
            padding: 4px;
            margin: 0 5px;
        }

        .active {
            color: green;
        }
    </style>
</head>
<body>
    <table width="60%" border="1" cellspacing="0" align="center">
        <tr>
            <td align="center">
                <h1>Add Records with PHP & Ajax</h1>
            </td>
            <td align="center">
                <input type="search" id="search" placeholder="Search...">
            </td>
        </tr>
        <tr>
            <td align="center" id="table-from" colspan="2">
                <form action="" id="add-form">
                    <br>
                    <input type="text" name="" id="first_name" placeholder="First name">
                    <input type="text" name="" id="last_name" placeholder="Last name">
                    <input type="button" id="save-btn" value="Submit">
                    <br>
                    <br>
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data" colspan="2">
                <table width="60%" border="1" cellspacing="0" cellpading="0" align="center">
                    <!-- <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td>Arfa</td>
                    </tr> -->
                </table>
            </td>
        </tr>
    </table>

    <div id="error-message"></div>
    <div id="success-message"></div>

    <div id="modal">
        <div id="modal-form">
            <h2>Update Info</h2>
            <table cellpadding="10">
                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" name="" id="edit-first_name">
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type="text" name="" id="edit-last_name">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" id="update-btn" value="Update Info">
                    </td>
                </tr>
            </table>

            <div id="close-btn">X</div>

        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            function loadTable(page) {
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    data : {page_no: page},
                    success : function(data) {
                        $("#table-data").html(data);
                    }

                }); 
            }
            loadTable();

            $(document).on("click", "#pagination a", function(e) {
                e.preventDefault();
                var page_id = $(this).attr("id");

                loadTable(page_id);
            });


            $("#save-btn").on("click", function(e) {
                e.preventDefault();

                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();

                if(first_name == "" | last_name == "") {
                    $("#error-message").html("All fields are required.").slideDown();
                    $("#success-message").slideUp();
                }else {
                    $.ajax({
                    url : "ajax_insert.php",
                    type : "POST",
                    data : {first_name: first_name, last_name: last_name},
                    success : function(data) {
                        if(data == 1) {
                            loadTable();
                            $("#add-form").trigger("reset");
                            $("#success-message").html("Data saved successfully.").slideDown();
                            $("#error-message").slideUp();
                        }else {
                            $("#error-message").html("Can't save record.").slideDown();
                            $("#success-message").slideUp();

                        }

                      }
                    });

                }

                
            });


            $(document).on("click", ".delete-btn", function() {
                if(confirm("Delete student info?")) {
                    var id = $(this).data("id");
                    var element = this;

                    $.ajax({
                        url: "ajax_delete.php",
                        type: "POST",
                        data: {id: id},
                        success: function(data) {
                            if(data == 1) {
                                $(element).closest("tr").fadeOut();
                                $("#success-message").html("Data delete successfully.").slideDown();
                                $("#error-message").slideUp();
                            }else {
                                $("#error-message").html("Can't delete record.").slideDown();
                                $("#success-message").slideUp();
                            }
                        }
                    });
                }

            });


            $(document).on("click", ".edit-btn", function() {
                $("#modal").show();
                var editId = $(this).data("eid");

                $.ajax({
                        url: "ajax_edit.php",
                        type: "POST",
                        data: {edit_id: editId},
                        success: function(data) {
                            $("#modal-form table").html(data);
                        }
                    });
            });

            $("#close-btn").on("click", function() {
                $("#modal").hide();
            });


            $(document).on("click", "#update-btn", function() {
                var edit_id = $("#edit_id").val();
                var edit_first_name = $("#edit_first_name").val();
                var edit_last_name = $("#edit_last_name").val();

                $.ajax({
                        url: "ajax_update.php",
                        type: "POST",
                        data: {id: edit_id, first_name: edit_first_name, last_name: edit_last_name},
                        success: function(data) {
                            $("#modal").hide();
                            
                            if(data == 1) {
                                loadTable();

                                $("#success-message").html("Update Info successfully.").slideDown();
                                $("#error-message").slideUp();
                            }else {
                                $("#error-message").html("Can't edit record.").slideDown();
                                $("#success-message").slideUp();
                            }
                        }
                    });
            });

            // Live_search
            $("#search").on("keyup", function() {
                var search_item = $(this).val();

                $.ajax({
                    url : "ajax_live_search.php",
                    type : "POST",
                    data : {search: search_item},
                    success : function(data) {
                        $("#table-data").html(data);
                    }

                });

            });


        });

    </script>

</body>
</html>