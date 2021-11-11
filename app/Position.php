<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Position extends Model
{
    public function employee(){
        return $this->hasMany(Employee::class);
    }
}
