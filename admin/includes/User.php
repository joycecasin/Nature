<?php


class User extends Db_object
{
    //Toevoegen variabelen die aanwezig zijn in tabel User in database
    protected static $db_table = "user";
    protected static $db_table_fields = array('username' , 'password' , 'naam' , 'voornaam' , 'role');

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



}

?>