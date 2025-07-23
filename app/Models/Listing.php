<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = ['beds','baths','area','city','street','street_nr','code','price'];  

    public function owner(){
        return $this->belongsTo(User::class,'by_user_id');
    }
}