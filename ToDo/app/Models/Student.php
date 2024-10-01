<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name','surname','group_id'];
    protected $hidden = [
        'id','created_at','updated_at'
    ];
    protected $guarded = ['id','created_at','updated_at'];

    public function group(){
        return $this->hasOne(Group::class,'id','group_id');
    }
}
