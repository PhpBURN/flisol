<?php
/**
 * This is an automatic generated Model by Reverse Migrations at PhpBURN Framework
 * You can find more information about it at http://www.phpburn.com
 *
 * The identation here follows the 2 spaces identation.
 * Please change this documentation for your model information.
 *
 * PhpBURN is distributed under GPL licence for development and cannot be sold.
 * Do not forget to support Open Sources iniciatives, they provide tools like you this.
 *
 * @author Klederson Bueno <klederson@klederson.com>
 * @see http://www.phpburn.com
 * @license GPL
 * @package Flisol 
 */
class Files extends PhpBURN_Core {
  public $_tablename = "Files";
  public $_package = "Flisol";


  public $idFile; 
  public $mimeType; 
  public $size; 
  public $originalName; 
  public $currentName; 
  public $status; 
  public $extension; 
  public $createdAt; 

  public function _mapping() {
    $this->getMap()->addField( "idFile","idFile", "int", 10, array("primary" => 1, "not_null" => 1, "auto_increment" => 1) );
    $this->getMap()->addField( "mimeType","mimeType", "varchar", 45, array("not_null" => 1) );
    $this->getMap()->addField( "size","size", "int", 10, array("not_null" => 1) );
    $this->getMap()->addField( "originalName","originalName", "varchar", 255, array("not_null" => 1) );
    $this->getMap()->addField( "currentName","currentName", "varchar", 255, array("not_null" => 1) );
    $this->getMap()->addField( "status","status", "enum('active','blocked','suspense','deleted')", null, array("not_null" => 1, "default_value" => 'active') );
    $this->getMap()->addField( "extension","extension", "varchar", 5, array("not_null" => 1) );
    $this->getMap()->addField( "createdAt","createdAt", "timestamp", null, array("not_null" => 1, "default_value" => 'CURRENT_TIMESTAMP') );

    
  }
  
  /* Do not change anything above this line unless you really know what are you doing */
  /* Put all your customized code bellow this line */
  
}
?>
