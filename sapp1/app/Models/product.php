<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class product extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable=[

        /**	catid 	pname 	pimg 	qty 	price 	pdesc */

        "catid","pname","pimg","qty","price","pdesc"
    ];

    protected $table="addproduct";





}
