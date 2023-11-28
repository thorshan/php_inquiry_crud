<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'name', 'city', 'type', 'phone', 'remark', 'status'];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
