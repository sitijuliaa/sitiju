<?php
class koneksi{
    function koneksi(){
        return new PDO("mysql:host=localhost;dbname=ppdb",'root','');

    }
}
$koneksi1 = new koneksi();
$koneksi1->koneksi();