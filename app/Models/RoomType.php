<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
     use HasFactory;

     protected $table = 'room_types';
     protected $fillable = [
          'title',
          'detail',
     ];

     function hotel()
     {
          return $this->belongsTo(Hotel::class, 'hotel_id');
     }
}
