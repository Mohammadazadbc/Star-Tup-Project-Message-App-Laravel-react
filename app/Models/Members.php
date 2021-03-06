<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $table="members";

    public function conversation(){
        return $this->belongsToMany(Conversations::class,'conversations_members');
    }
   

}
