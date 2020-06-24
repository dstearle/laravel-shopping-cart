<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Relation for user (One to many)
    public function user() {

        return $this->belongsTo('App\User');

    }

}
