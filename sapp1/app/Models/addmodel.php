<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class addmodel extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable=[

        'catname','catdesc'
    ];
    protected $table="addcat";
}
