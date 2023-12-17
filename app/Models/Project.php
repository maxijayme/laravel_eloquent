<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $fillable = ["city_id", "company_id", "user_id", "name", "execution_date", "is_active"];

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }

}
