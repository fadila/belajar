<?php 

class Tabungan{

	var $noRekening;
	var $pemilik;
	var $saldo;
	var $pinATM;
	var $pinUser;

	function __construct(){

		$this->noRekening="123456";
		$this->pemilik="Dayat fadila";
		$this->saldo=0;
		$this->pinATM="1233";

	}

	function cekSaldo(){

		echo "Saldo anda sebesar Rp ".$this->saldo."<br/>";
	}

	function cekPinATM($pin){

		if($this->pinATM==$pin){
			return true;
			
		} else {
			return false;
		}
	}
	
	function debet($jumlah){
		$this->saldo+=$jumlah;
	}

	function ambil($jumlah){
		
		if($this->saldo>$jumlah){
			$this->saldo-=$jumlah;

			
		} else {
			echo "Saldo anda tidak mecukupi <br/>";
		}
	}

}
	
	$tabungan = new Tabungan;
	$tabungan->cekSaldo(); 
	$tabungan->debet(200000);
	$tabungan->cekSaldo(); 
	$tabungan->ambil(300000);
	$tabungan->cekSaldo();

?>