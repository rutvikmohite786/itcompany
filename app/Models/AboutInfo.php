<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_address',
        'email',
        'mobile',
        'title',
        'description'
    ];
}
