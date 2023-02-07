<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageService extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'advantage_service';

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = ['service_id','advantage','created_at','updated_at','deteled_at'];

    // one to many
    public function service() {
        return $this->belongsTo('App/Models/Service', 'service_id', 'id');
    }
}
