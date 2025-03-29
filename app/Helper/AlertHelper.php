<?php

namespace App\Helper;

class AlertHelper
{
    public static function success($title, $message)
    {
        return '<div class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
                    <p class="self-center">
                      <strong>' . htmlspecialchars($title) . ' </strong>' . htmlspecialchars($message) . '
                    </p>
                    <strong class="text-white text-xl align-center cursor-pointer alert-del">&times;</strong>
                </div>';
    }

    public static function error($title, $message)
    {
        return '<div class="flex justify-between text-red-200 shadow-inner rounded p-3 bg-red-500">
                    <p class="self-center text-white">
                      <strong>' . htmlspecialchars($title) . ' </strong>' . htmlspecialchars($message) . '
                    </p>
                    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
                </div>';
    }
}
