<?php

namespace App\Services;
class CheckFormService
{
    public static function checkGender($contact){

        if($contact->gender === 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }
        return $gender;
    }

    public static function checkAge($contact){

        if($contact->age === 1){ $age = '~19歳'; }
        if($contact->age === 2){ $age = '20歳~２9歳'; }
        if($contact->age === 3){ $age = '３0歳~３9歳'; }
        if($contact->age === 4){ $age = '４0歳~４9歳'; }
        if($contact->age === 5){ $age = '５0歳~５9歳'; }
        if($contact->age === 6){ $age = '６０歳〜'; }

        return $age;
    }
};