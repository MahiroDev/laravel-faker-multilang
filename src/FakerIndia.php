<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerIndia extends Base
{
    protected static $nama = ["Amit", "Priya", "Raj", "Anjali"];
    protected static $kota = ["Mumbai", "Delhi", "Bangalore"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
