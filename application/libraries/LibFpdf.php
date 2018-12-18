<?php 	if ( !defined('BASEPATH')) exit();
	class LibFpdf
	{
		function __construct()
		{
			require_once APPPATH.'libraries/fpdf/fpdf.php';
			require_once APPPATH.'libraries/fpdf/fpdf_optimizer.php';
		}
	}
?>