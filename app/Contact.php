<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
        // Primary Key
        public $primaryKey = 'id';
        // Timestamps
        public $timestamps = true;
    
        protected $fillable = [
            'lastname',
            'firstname',
            'lastname_kana',
            'firstname_kana',
            'birthday_year',
            'birthday_month',
            'birthday_day',
            'gender',
            'school_year',
            'school_name',
            'postalcode',
            'address',
            'parentname',
            'tel',
            'email',
            'teamname',
            'participation_year',
            'participation_month',
            'participation_day',
            'cose',
            'freearea',
        ];
}
