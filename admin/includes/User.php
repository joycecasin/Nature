<?php


class User extends Db_object
{
    //Toevoegen variabelen die aanwezig zijn in tabel User in database
    protected static $db_table = "user";
    protected static $db_table_fields = array('role', 'voornaam', 'naam', 'username', 'password');

    public $id;
    public $username;
    public $password;
    public $voornaam;
    public $naam;
    public $role;


// functie Verify users
    public static function verify_user($user, $pass)
    {
        global $database;
        $username = $database->escape_string($user);
        $password = $database->escape_string($pass);

        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
// Methode die de error zal opvangen
    public function set_file($file){
        $date = date('Y-m-d-H-i-s');
        if (empty($file) || !$file || !is_array($file)){
            $this->errors[] = "No file uploaded";
            return false;
        }elseif ($file['error'] != 0){
            $this->errors[]= $this->upload_errors_array[$file['error']];
            return false;
        }  else{
            $this->user_image = $date . basename($file['name']);
            $this->tmp_path = $file['tmp_name'];

        }
    }



}

?>