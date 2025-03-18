<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerSpanyol extends Base
{
    protected static $nama = ["Carlos", "Maria", "Jose", "Ana"];
    protected static $kota = ["Madrid", "Barcelona", "Valencia"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
