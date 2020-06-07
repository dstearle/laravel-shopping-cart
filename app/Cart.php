<?php

namespace App;

class Cart
{

    // Variables
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    // Method for checking current cart inventory
    public function __construct($oldCart) {

        // If an old cart exists
        if($oldCart) {

            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;

        }

    }

    // Method for adding a new item to cart
    public function add($item, $id) {

        // The item to be stored
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];

        // Checks if any items are currently in the cart
        if($this->items) {

            // Checks the id of the current item to see if it already exists in the cart
            if(array_key_exists($id, $this->items)) {

                // Overwrites the existing item so nothing changes
                $storedItem = $this->items[$id];

            }

        }

        // Incrementes qty counter
        $storedItem['qty']++;
        // Total amount for that type of item
        $storedItem['price'] = $item->price * $storedItem['qty'];
        // Adds a new item to cart
        $this->items[$id] = $storedItem;
        // Incrementes totalQty counter
        $this->totalQty++;
        // Total amount for all items
        $this->totalPrice += $item->price;

    }

}