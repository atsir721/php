<?php 

   class Buku{ 

   /* Variabel yang ada didalam kelas buku */ 

    var $judul; 

    var $harga; 

       /*br adalah tag html untuk membuat garis baru */ 

    function getHarga(){ 

      echo $this->harga ."<br/>"; 

    } 

    function getJudul(){ 

      echo $this->judul ." <br/>"; 

    } 

       /* Fungsi Spesial Construct didalam kelas buku */ 

       function __construct( $parameter1, $parameter2 ){ 

       $this->judul = $parameter1; 

    $this->harga = $parameter2; 

 } 

   } 

   Class Komik extends Buku{ 

   var $penerbit; 

   /*br adalah tag html untuk membuat garis baru */ 

   function getHarga(){ 

    echo $this->harga-5000 ."<br/>"; 

   } 

   Function setPenerbit($parameter){ 

    $this->penerbit = $parameter; 

   } 

   Function getPenerbit(){ 

    echo $this->penerbit. "<br />"; 

   } 

         /* Fungsi Spesial Construct didalam kelas Komik */ 

   function __construct( $parameter1, $parameter2, $parameter3 ){ 

   $this->judul = $parameter1; 

   $this->harga = $parameter2; 

   $this->penerbit = $parameter3; 

 } 

 } 

      /* Buat sebuah object komikkeren dari kelas komik */ 

   $komikkeren = new Komik( "One Piece", 20000, "Elexmedia" ); 

   /* Memanggil Method pada kelas komik */ 

   $komikkeren->getJudul(); 

   $komikkeren->getHarga(); 

   $komikkeren->getPenerbit(); 

 ?> 