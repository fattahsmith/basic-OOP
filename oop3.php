<?php 
//class manusia
  class manusia {
    //property
      var $nama;
      var $umur;
  }

    //method construct di jalankan pertama kali
    function __construct() {
        echo "im iadalah isi method construct <br>";
    }

    //method destruct di jalankan setelah semua method dijalankan
    function __destruct() {
        echo "im iadalah isi method destruct <br>";
    }
   //method manusia
    function tampilkan_nama(){
        return "nama saya rajin ngoding <br>";
    }

    //instasiasi class manusia
    $manusia = new manusia();

    //memamnggil metohd tampilkan_nama dari class manusia
    echo $manusia-> tampilkan_nama();
?>