<?php
class Database {
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "";
    private $db_name = "php_practice";

    private $mysqli = "";
    private $result = array();
    private $conn = false;

    public function __construct() {
        if(!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
            $this->conn = true;

            if($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
            
        }

    }


    public function insert($table, $params = array()) {
        // echo "<pre>";
        // print_r($params);
        if($this->tableExist($table)) {
            $table_columns = implode(',', array_keys($params));
            $table_values = implode("','", $params);

            $sql = "INSERT INTO $table($table_columns) VALUES('$table_values')";

            if($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true; //Not recommended

            }else {
                array_push($this->result, $this->mysqli->error);
                return false; //Not recommended
            }
        }

    }

    public function update($table, $params = array(), $where = null) {
        if($this->tableExist($table)) {
            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key = '$value' ";
            }

            $sql = "UPDATE $table SET ".implode(',', $args);  

            if($where != null) {
                $sql .= " WHERE $where";
            }

            if($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);

            }else {
                array_push($this->result, $this->mysqli->error);
            }
        }

    }

    public function delete($table, $where = null) {
        if($this->tableExist($table)) {
            $sql = "DELETE FROM $table";

            if($where != null) {
                $sql .= " WHERE $where";
            }

            if($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);

            }else {
                array_push($this->result, $this->mysqli->error);
            }
        }
    }

    public function select($table, $rows = "*", $join = null, $where = null, $order_by = null, $limit = null) {
        if($this->tableExist($table)) {
            $sql = "SELECT $rows FROM $table";

            if($join != null) {
                $sql .= " JOIN $join";
            }
            if($where != null) {
                $sql .= " WHERE $where";
            }
            if($order_by != null) {
                $sql .= " ORDER BY $order_by";
            }
            if($limit != null) {
                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else {
                    $page = 1;
                }

                $start = ($page - 1) * $limit;
                $sql .= " LIMIT $start, $limit";
                echo $sql."<br>";
            }

            $query = $this->mysqli->query($sql);

            if($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);

            }else {
                array_push($this->result, $this->mysqli->error);
            }

        }

    }

    public function pagination($table, $join = null, $where = null, $limit = null) {
        if($this->tableExist($table)) {
            if($limit != null) {
                $sql = "SELECT COUNT(*) FROM $table";

                if($where != null) {
                    $sql .= " WHERE $where";
                }
                if($join != null) {
                    $sql .= " JOIN $join";
                }

                $query = $this->mysqli->query($sql);
                $total_records = $query->fetch_array();

                $total_records = $total_records[0];
                $total_page = ceil($total_records / $limit);

                $url = basename($_SERVER['PHP_SELF']);

                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else {
                    $page = 1;
                }

                $output = "<ul class='pagination'>";
                    if($page > 1) {
                        $output .= "<li><a href='$url?page=".($page - 1)."'>Prev</a></li>";
                    }

                    if($total_records > $limit) {
                        for($i = 1; $i <= $total_page; $i++) {
                            if($i == $page) {
                                $active = "class='active' ";
                            }else {
                                $active = "";
                            }

                            $output .= "<li><a $active href='$url?page=$i'>$i</a></li>";
                        }
                    }

                    if($total_page > $page) {
                        $output .= "<li><a href='$url?page=".($page + 1)."'>Next</a></li>";
                    }
                $output .= "</ul>";
                echo $output;
                
            }else {
                return false;
            }
        }
    }

    public function sql($sql) {
        $query = $this->mysqli->query($sql);

        if($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true; //Not recommended
        }else {
            array_push($this->result, $this->mysqli->error);
            return false; //Not recommended
        }
    }

    private function tableExist($table) {
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table' ";
        $tableInDB = $this->mysqli->query($sql);
        
        if($tableInDB) {
            if($tableInDB->num_rows == 1) {
                return true;
                
            }else {
                array_push($this->result, $table. " does not exist in this Database");
                return false;
            }
        }
    }

    public function getResult() {
        $val = $this->result;
        $this->result = array();
        return $val;

    }

    public function __destruct() {
        if($this->conn) {
            if($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
            
        }else {
            return false;
        }
    }



}

?>