<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }


    protected $model =Customer ::class;
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'address',
        'phone',
        
      ];
     

}
