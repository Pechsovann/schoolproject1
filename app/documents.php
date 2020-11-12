<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    protected $table = 'documents';
    protected $fillable=['max_loan','property_price','property_type', 'customer_id','timestamps'];

    public function customer() {
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }
}
