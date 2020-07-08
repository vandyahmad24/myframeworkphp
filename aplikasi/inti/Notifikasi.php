<?php

/**
 * 
 */
class Notifikasi
{

	public static function setFlash($pesan, $aksi, $tipe){
			$_SESSION['notifikasi'] = [
				'pesan' => $pesan,
				'aksi'  => $aksi,
				'tipe'  => $tipe
			];
	}

	public static function flash()
	{
		if(isset($_SESSION['notifikasi'])){
			echo '<div class="alert alert-'.$_SESSION['notifikasi']['tipe'].' alert-dismissible fade show" role="alert">
				  <strong>'.$_SESSION['notifikasi']['aksi']. ' </strong> '.$_SESSION['notifikasi']['pesan'].' 
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			unset($_SESSION['notifikasi']);
		}
	}
	
}