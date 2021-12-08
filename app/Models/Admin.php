<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'username',
        'password',
        'created_at',
        'updated_at'
    ];

    public function createPost($data)
    {
        
        DB::table('admins')->select($data);
    }
}
