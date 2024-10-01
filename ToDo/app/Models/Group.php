<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $fillable = ['title','start_from','is_active'];
    protected $guarded = ['id','created_at','updated_at'];
    protected $hidden = [
        'id','created_at','updated_at'
    ];

    public function students(){
        return $this->hasMany(Student::class,'group_id','id');
    }
}
