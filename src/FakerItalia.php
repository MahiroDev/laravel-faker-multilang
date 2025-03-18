<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerItalia extends Base
{
    protected static $nama = ["Luca", "Giulia", "Marco", "Francesca"];
    protected static $kota = ["Rome", "Milan", "Naples"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
