<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Position;

class Employee extends Model
{
    protected $table ="employees";
    protected $guarded = ['id'];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }
}
