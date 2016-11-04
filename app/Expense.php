<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['type', 'name', 'amount', 'company_id', 'user_id'];

    public function company(){
        return $this->hasOne('App\Company', 'company_id' , 'id');
    }

    public function user(){
        return $this->hasOne('App\User', 'user_id' , 'id');
    }
}