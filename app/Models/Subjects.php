<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    const MONTHLY_FREQ = 1;
    const WEEKLY_FREQ = 2;
    const DAILY_FREQ = 3;
    const FIRST_FREQ_UNIT = 1;
    const SEC_FREQ_UNIT = 2;
    const THIRD_FREQ_UNIT = 3;
    protected $fillable = ['name','dob','frequency','frequency_unit'];
    public static function getFrequency(string $freq) {
        return [
            self::MONTHLY_FREQ => [
                self::FIRST_FREQ_UNIT =>'1-2',
                self::SEC_FREQ_UNIT => '3-4',
            ],
            self::WEEKLY_FREQ =>
            [
                self::FIRST_FREQ_UNIT =>'1-2',
                self::SEC_FREQ_UNIT => '3-4',
            ],
            self::DAILY_FREQ => 
            [
                self::FIRST_FREQ_UNIT =>'1-2',
                self::SEC_FREQ_UNIT => '3-4',
                self::THIRD_FREQ_UNIT => '5+'
            ]
        ];
    }
    public static function getFrequencies() {
        return [
            self::MONTHLY_FREQ => 'Monthly',
            self::WEEKLY_FREQ => 'Weekly',
            self::DAILY_FREQ => 'Daily'
        ];
    }
}
