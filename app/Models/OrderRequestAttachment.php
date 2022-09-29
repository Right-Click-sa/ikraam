<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderRequest;

class OrderRequestAttachment extends Model
{
    use HasFactory;

    protected $fillable = ['order_request_id', 'attachment'];

    public function requests()
    {
        return $this->belongsTo(OrderRequest::class, 'order_request_id');
    }
}
