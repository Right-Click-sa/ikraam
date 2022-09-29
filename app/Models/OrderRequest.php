<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderRequestAttachment;
use App\Models\Association;
use App\Models\Status;
use App\Models\OrderType;

class OrderRequest extends Model
{
    use HasFactory;

    protected $fillable = ['order_type_id', 'association_id', 'status_id', 'description', 'rejection_reason'];

    public function attachments()
    {
    	 return $this->hasMany(OrderRequestAttachment::class);
    }

    public function association()
    {
        return $this->belongsTo(Association::class, 'association_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function type()
    {
        return $this->belongsTo(OrderType::class, 'order_type_id');
    }
}
