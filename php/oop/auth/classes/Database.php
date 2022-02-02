<?php 

class Database {
  private $mysqli,
          $HOST = 'localhost',
          $USER = 'root',
          $PASS = 'root',
          $DBNAME = 'tutorial'

  public function __construct()
  {
    $this->mysqli = new mysqli( $this->HOST, $this->USER, $this->PASS, $this->DBNAME );
    if(mysqli_connect_error() ){
      die('gagal koneksinya');
    } 
  } 

  new Database();
}
?>