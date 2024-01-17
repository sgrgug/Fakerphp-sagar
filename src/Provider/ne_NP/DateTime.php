<?php

namespace Faker\Provider\ne_NP;

class DateTime extends \Faker\Provider\DateTime
{
    public static function amPm($max = 'now')
    {
        return static::dateTime($max)->format('a') === 'am' ? 'पूर्वाह्न' : 'अपराह्न';
    }

    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => 'आइतबार',
            'Monday' => 'सोमबार',
            'Tuesday' => 'मङ्गलबार',
            'Wednesday' => 'बुधबार',
            'Thursday' => 'बिहिबार',
            'Friday' => 'शुक्रबार',
            'Saturday' => 'शनिबार',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public static function monthName($max = 'now')
    {
        $map = [
            'January' => 'वैशाख',
            'February' => 'जेठ',
            'March' => 'असार',
            'April' => 'साउन',
            'May' => 'भदौ',
            'June' => 'असोज',
            'July' => 'कार्तिक',
            'August' => 'मंसिर',
            'September' => 'पुष',
            'October' => 'माघ',
            'November' => 'फागुन',
            'December' => 'चैत',
        ];
        $month = static::dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }
}
