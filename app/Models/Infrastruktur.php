<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infrastruktur extends Model
{
    use HasFactory;
    protected $table = 'infrastruktur';
    protected $fillable =['nama_infrastruktur', 'link_infrastruktur'];

}
