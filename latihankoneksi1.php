<?php
class DbConfig
{
    //private adalah menyembunyikan atau menjaga property dan method agar tidak bisa diakses diluar class
    private $_host = 'localhost';
    private $_username = 'devy shafira';
    private $_password = '';
    private $_database = 'novel';

    //proteced adalah property ataupun method tersebut tidak bisa diakses dari luar class. Namun bisa diakses oleh class itu sendiri atau turunan dari class tersebut
    protected $connection;
  
    //koneksi ke database
    public function _construct()
    {

        //menyambungkan ke database
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            //jika tidak terhubung ke database, maka akan menampilkan...
            if ($this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }
        //kembali ke database nya
        return $this->connection;
    }
}

$konek=mysqli_connect("localhost","devy shafira","","novel");
function query($query){
global $konek;
$result = mysqli_query ($konek,$query);
$rows= [];
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;
}
?>

