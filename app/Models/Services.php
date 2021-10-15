<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function service_types()
    {
        return $this->belongsTo(ServiceType::class, 'service_types_id');
    }
}
