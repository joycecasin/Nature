<?php
class Product extends Db_object
{
    protected static $db_table = "product";
    protected static $db_table_fields = array('product_img', 'naam', 'omschrijving','serienummer','prijs');

    public $id;
    public $product_img;
    public $naam;
    public $omschrijving;
    public $serienummer;
    public $prijs;

    public $tmp_path;
    public $upload_directory = 'img';
    public $errors = array();
    public $upload_errors_array = array(
        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload max_filesize from php.ini",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds MAX_FILE_SIZE in php.ini for html form",
        UPLOAD_ERR_NO_FILE => "No file uploaded",
        UPLOAD_ERR_PARTIAL => "The file was partially uploaded",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write to disk",
        UPLOAD_ERR_EXTENSION => "A php extension stopped your upload"
    );

    public function set_product_file($file)
    {
        if (empty($file) || !$file || !is_array($file)) {
            $this->errors[] = 'No file uploaded!';
            return false;
        } elseif ($file['error'] != 0) {
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        } else {
            $this->product_img = basename($file['name']);
            $this->tmp_path = $file['tmp_name'];
        }
    }

    public function save_product()
    {
        if ($this->id) {
            $this->update();
        } else {
            if (!empty($this->errors)) {
                return false;
            }
            if (empty($this->product_img) || empty($this->tmp_path)) {
                $this->errors[] = "File not available";
                return false;
            }

            $target_path = SITE_ROOT . DS . "admin" . DS . $this->upload_directory . DS . $this->product_img;

            if (file_exists($target_path)) {
                $this->errors[] = "File {$this->product_img} exists!";
                return false;
            }
            if (move_uploaded_file($this->tmp_path, $target_path)) {
                if ($this->create()) {
                    unset($this->tmp_path);
                    return true;
                }
            } else {
                $this->errors[] = "This folder has no write rights!";
                return false;
            }
        }
    }

     public function picture_path()
    {
        return $this->upload_directory . DS . $this->product_img;
    }

    public function delete_photo()
    {
        if ($this->delete()) {
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->picture_path();
            return unlink($target_path) ? true : false;
        }
    }
}
