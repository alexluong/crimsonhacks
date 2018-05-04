<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Application extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
