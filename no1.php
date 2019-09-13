<?php //awal dari syntax php

	Class Mahasiswa{ //kelas berisi data (variabel) dan fungsi yang membentuk paket yang disebut: ‘objek’
	
		public $nim, $nama, $prodi, $asalSma; // perintah public yang dimana mengandung variabel nim nama  prodi dan asal sma
		public function __construct($nim = "NIM", $nama = "NAMA", $prodi = "PRODI", $asalSma= "Asal SMA"){ //tempat dimana perintah __construct yang digunakan untuk menilai serperti nim dll ( tergantung user '
			$this->nim = $nim; //memasukkan nilai variabel pada nim
			$this->nama = $nama; //memasukkan nilai variabel pada nama
			$this->prodi = $prodi; //memasukkan nilai variabel pada prodi
			$this->asalSma = $asalSma; //memasukkan nilai variabel pada asalsma
		} //end
		public function getInfomahasiswa(){ //baris ini kita membuat sebuah fungsi yang sesuai nama "getInfomahasiswa"
			
			$mhs = "NAMA : {$this->nama}, NIM : {$this->nim}, PRODI : {$this->prodi}, Asal SMA : {$this->asalSma}"; //baris ini kita membuat variabel/nilai pada $mhs
			
		return $mhs; //perintah ini atau "return" digunakan untuk mengembalikan  nilai pada $mhs
		} //end
	} //end
		
	Class MahasiswaStrataSatu extends Mahasiswa { //anakan dari mahasiswasatu sebelumnya 
		
		public function getInfomahasiswa(){ //kita menggunakan kembali getInfomahasiswa atau mengaktifkan
			$mhs ="Mahasiswa S1 : ".parent::getInfomahasiswa(); //kita membuat sebuah statment variabel mahasiswa yang bernilai/berstring mahasiswa satu,dengan parent  getinfo mahasiswa
			return $mhs; //perintah ini atau "return" digunakan untuk mengembalikan  nilai pada $mhs
		} //end
	}	//end 
		
	Class MahasiswaStrataDua extends Mahasiswa{ //pada baris ini kita membuat class baru lagi bernama mahasiswastratadua hasil warisan/extends dari mahasiswa.
		
		public $asalS1; //membuat variabel baru
		public function __construct($nim, $nama, $prodi, $asalSma, $asalS1){ //menggunakan kembali fungsi __construct
			parent::__construct($nim, $nama, $prodi, $asalSma); // untuk menjalankan __construct 2x
			$this->asalS1 = $asalS1; //memasukan nilai asals1 kedalam $asals1
		}
		public function getInfomahasiswa(){ //kita menghidupkan kembali function getInfomahasiswa
			
			$mhs ="Mahasiswa S2 : ".parent::getInfomahasiswa()." Asal S1 : {$this->asalS1}";
			return $mhs;
		} //end
	}		//end
		
	$mahasiswa1 = new MahasiswaStrataSatu("F1A103032", "Natalis Ransi", "Matematika", "SMAN 2 Raha"); //memasukkan variabel dari mahasiswasatu dengan isi pada dalam kurungan tersebut
	$mahasiswa2 = new MahasiswaStrataDua("F1G119030", "Juan Antonio", "Ilmu Komputer", "SMAN 1 OK", "UHO"); //memasukkan variabel dari mahasiswasatu dengan isi pada dalam kurungan tersebut
		
	echo $mahasiswa1->getInfomahasiswa(); //hasil printout dari  mahasiswa1
	echo "<br>"; //menampilkan barus baru 
	echo $mahasiswa2->getInfomahasiswa(); //hasil prinout dari mahasiswa2
		
?>       <!-- penutup>		