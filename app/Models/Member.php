<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static function getAllMembers(){
        return [
            [
                'id' => 1,
                'name' => 'Jean',
                'job' => 'Developpeur'
            ],
            [
                'id' => 2,
                'name' => 'Paul',
                'job' => 'Designer'
            ],
            [
                'id' => 3,
                'name' => 'Marie',
                'job' => 'Chef de projet'
            ]
        ];
    }

    public static function find(int $id){
        return self::getAllMembers()[$id - 1];
    }
}
