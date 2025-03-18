<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerAmerika extends Base
{
    protected static $nama = ["John", "Emily", "Michael", "Sarah"];
    protected static $kota = ["New York", "Los Angeles", "Chicago"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
