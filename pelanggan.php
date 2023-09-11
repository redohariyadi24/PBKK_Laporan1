<?php
    require_once "config.php";
    class pelanggan extends config{
        private $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    function dataPelanggan(){
        $query = mysqli_query($this->koneksi, 'SELECT * FROM pelanggan');
        while($row = mysqli_fetch_array($query)){
            $data[]=$row;
        }

        return $data;
    }
}
?>