<?php

/**
 * Can use route from here
 */
use peal\barcodegenerator\Facades\BarCode;
Route::get("/testbarcode",function(){
    
    
    try {
        
        //Using Facades
        
        
        $barcontent = BarCode::barcodeFactory("BarCode")
                            ->renderBarcode(
                                    $filepath ='', 
                                    $text="HelloHello", 
                                    $size='50', 
                                    $orientation="horizontal", 
                                    $code_type="code39", 
                                    $print=true, 
                                    $sizefactor=1
                            );
        return '<img alt="testing" src="'.$barcontent.'"/>';
        
        //Without facades
        
        $bar = App::make('BarCode');
        $barcontent = $bar->barcodeFactory("BarCode")
                            ->renderBarcode(
                                    $filepath ='', 
                                    $text="HelloHello", 
                                    $size='50', 
                                    $orientation="horizontal", 
                                    $code_type="code39", 
                                    $print=true, 
                                    $sizefactor=1
                            );
        return '<img alt="testing" src="'.$barcontent.'"/>';
        
        
        //Without Laravel, can be usable any php or php framework 
        
        //$qr = new \peal\qrcodegenerator\Server\QrServer();
        
        
    } catch(Exception $e) {
        return $e->getMessage();
    }
});