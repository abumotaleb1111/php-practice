<?php
if($_POST['first_name'] != "" || $_POST['last_name']) {
    if(file_exists('json/my-06-09-2021.json')) {
        $current_data = file_get_contents('json/my-06-09-2021.json');
        $array_data = json_decode($current_data, true);
        $new_data = array (
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name']
        );

        $array_data[] = $new_data;
        $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

        if(file_put_contents('json/my-06-09-2021.json', $json_data)) {
            echo "<h3>Successfully saved in JSON file.</h3>";
        }else {
            echo "<h3>Can't save in JSON file.</h3>";
        }

    }else {
        echo "<h3>JSON file not exits.</h3>";
    }

}




?>