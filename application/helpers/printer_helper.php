<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . "/../../vendor/autoload.php";

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

// class Printer_helper {
    function printReceipt()
    {
        try {
            //conector of printer
            $connector = new FilePrintConnector("php://stdout");
            $printer = new Printer($connector);

            //text what to print
            $printer -> text("Hello World!\n");
            $printer -> cut();

            //close connection to printer
            $printer -> close();
        } catch(Exception $e) {
            echo "Cannot print this: " . $e->getMessage();
        }
    }
// }
