<?php


class Product extends Db_object
{
// Variabelen toevoegen
    protected static $db_table = "product";
    protected static $db_table_fields = array('product_img', 'naam', 'omschrijving', 'serienummer', 'prijs', 'filename', 'type', 'size');
    public $product_nr;
    public $product_img;
    public $naam;
    public $omschrijving;
    public $serienummer;
    public $prijs;
    public $filename;
    public $type;
    public $size;

}