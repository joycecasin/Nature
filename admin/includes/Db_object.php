<?php


class Db_object
{

    public static function find_all()
    {
        return static::find_this_query("SELECT * FROM " . static::$db_table);

    }

    public static function find_by_id($id)
    {
        $result = static::find_this_query("SELECT * FROM " . static::$db_table . " WHERE id=$id LIMIT 1");
        /*if (!empty($result)){
            return array_shift($result);
        }else{
            return false;
        }*/
        return !empty($result) ? array_shift($result) : false;
    }

    public static function find_this_query($sql)
    {
        global $database;
        $result = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result)) {
            $the_object_array[] = static::instantie($row);
        }
        return $the_object_array;
    }

    public static function instantie($result)
    {
        $calling_class = get_called_class(); // late static binding
        $the_object = new $calling_class;

        foreach ($result as $the_attribute => $value) {
            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

    // aanmaken van user
    public function create()
    {
        global $database;
        $properties = $this->clean_properties();

        $cre = "INSERT INTO " . static::$db_table . " (" . implode(",", array_keys($properties)) . ")";
        $cre .= " VALUES ('" . implode("','", array_values($properties)) . "')";

        if ($database->query($cre)) {
            $this->id = $database->the_insert_id();
            return true;
        } else {
            return false;
        }
       $database->query($cre);

    }

    //wijzigen van user
    public function update()
    {
        global $database;
        $properties = $this->clean_properties();
        $properties_assoc = array();

        foreach ($properties as $key => $value) {
            $properties_assoc[] = "{$key} = '{$value}'";
        }

        $upd = "UPDATE " . static::$db_table . " SET ";
        $upd .= implode(",", $properties_assoc);
        $upd .= " WHERE id= " . $database->escape_string($this->id);


        $database->query($upd);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    // delete user
    public function delete()
    {
        global $database;

        $del = "DELETE FROM " . static::$db_table . " ";
        $del .= "WHERE id= " . $database->escape_string($this->id);
        $del .= " LIMIT 1";

        $database->query($del);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    // functie properties die alle properties van de class zal inlezen.
    protected function properties()
    {
        $properties = array();
        foreach (static::$db_table_fields as $db_field) {
            if (property_exists($this, $db_field)) {
                $properties[$db_field] = $this->$db_field;
            }
        }
        return $properties;

    }

    protected function clean_properties()
    {
        global $database;
        $clean_properties = array();
        foreach ($this->properties() as $key => $value) {
            $clean_properties[$key] = $database->escape_string($value);
        }

        return $clean_properties;

    }

    // save functie om bepaalde functies te vereenvoudigen
    public function save()
    {
        return isset($this->id) ? $this->update() : $this->create();
    }

//Opvangen van errors
    public $errors = array();
    public $upload_errors_array = array(
        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload max_filesize from php.ini",
        UPLOAD_ERR_FORM_SIZE => "The upload file exceeds MAX_FILES_SIZE in php.ini for html form",
        UPLOAD_ERR_NO_FILE => "No file uploaded",
        UPLOAD_ERR_PARTIAL => "The file was partially uploaded",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write to disk",
        UPLOAD_ERR_EXTENSION => "A php extension stopped your upload"
    );


}