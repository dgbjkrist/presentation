<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
     protected $fillable = [
        "site_id",
        "signature",
        "amount",
        "trans_id",
        "custom",
        "currency",
        "payid",
        "payment_date",
        "payment_time",
        "error_message",
        "payment_method",
        "phone_prefixe",
        "cel_phone_num",
        "ipn_ack",
        "created",
        "updated",
        "result",
        "trans_status",
        "designation",
        "buyer_name",
        'client_id'
    ];

}
