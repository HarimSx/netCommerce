<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'company_id',
    ];

    public $timestamps = true;


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
