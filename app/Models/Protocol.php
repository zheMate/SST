<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Protocol extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'protocols';
    protected $guarded = false;

    public function users() {
        return $this->belongsToMany(User::class, 'protocol_users', 'protocol_id', 'user_id');
    }
}
