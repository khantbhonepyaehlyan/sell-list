<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    Protected $fillable = ['user_id','accId','accDate','accName','accType','takePrice','sellPrice','profit'];
}
