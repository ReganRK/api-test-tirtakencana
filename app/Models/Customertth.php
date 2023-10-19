<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customertth extends Model
{
    use HasFactory;
    protected $table = "customertth";

    protected $fillable = [
        'Received', 'ReceivedDate', 'FailedReason'
    ];
}
