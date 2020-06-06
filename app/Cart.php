<?php

namespace App;

class Cart
{
    
    //
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    // 
    public function __construct($oldCart) {

        // If an old cart exists
        if($oldCart) {

            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;

        }

    }

}