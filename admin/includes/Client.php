<?php


class Client extends Db_object
{
    //Toevoegen variabelen die aanwezig zijn in tabel User in database
    protected static $db_table = "klant";
    protected static $db_table_fields = array('naam', 'voornaam', 'bedrijf', 'email', 'telefoon','straat','nummer','toevoeging','postcode_postcode','gemeente');

    public $klantnr;
    public $naam;
    public $voornaam;
    public $bedrijf;
    public $email;
    public $telefoon;
    public $straat;
    public $nummer;
    public $toevoeging;
    public $postcode_postcode;
    public $gemeente;







}

?>