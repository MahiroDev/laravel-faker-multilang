<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerTokyo extends Base
{
    protected static $nama = ["Taro", "Yuki", "Sakura", "Takashi"];
    protected static $tempat = ["Shibuya", "Shinjuku", "Akihabara", "Harajuku"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function tempat()
    {
        return static::randomElement(static::$tempat);
    }
}
