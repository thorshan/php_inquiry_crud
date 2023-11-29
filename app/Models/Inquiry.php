<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'name', 'city', 'type_id', 'phone', 'remark', 'status_id'];
    

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
