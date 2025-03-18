<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerJerman extends Base
{
    protected static $nama = ["Hans", "Anna", "Peter", "Laura"];
    protected static $kota = ["Berlin", "Munich", "Hamburg"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
