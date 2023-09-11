<?php
    require_once "config.php";
class produk extends config{
    private $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    function data(){
        $query = mysqli_query($this->koneksi, 'SELECT * FROM produk');
        while($row = mysqli_fetch_array($query)){
            $data[]=$row;
        }

        return $data;
    }


}