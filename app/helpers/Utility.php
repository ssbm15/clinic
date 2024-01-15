<?php

use App\Models\Subjects;
use Carbon\Carbon;

    if(!function_exists('getUnitFrequency')) {
        function getUnitFrequency(string $freq) {
            return Subjects::getUnitFrequency($freq);
        }
    }
    if(!function_exists('getAllFrequency')) {
        function getAllFrequency() {
            return Subjects::getFrequencies();
        }
    }
    if(!function_exists('getAge')) {
        function getAge(string $age) {
            $age = Carbon::parse($age)->age;
            return $age;
        }
    }
    if(!function_exists('showDOB')) {
        function showDOB(string $date) {
            return Carbon::parse($date)->format('F j, Y');
        }
    }

?>