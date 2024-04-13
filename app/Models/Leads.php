<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_name',
        'email',
        'countrycode',
        'mobile',
        'project_title',
        'pages',
        'l_status',
        'create_at', // Replace with the actual column name in your database
        'deadline',
        'delivery_time',
        'price',
        'message',
        'service_type',
        'tech',
        'resit',
    ];

    public function call()
    {
        return $this->hasMany(Calls::class, 'lead_id', 'id' );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'emp_id');
    }
   
}
