<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerMesir extends Base
{
    protected static $nama = ["Ahmed", "Fatima", "Mohamed", "Sara"];
    protected static $kota = ["Cairo", "Alexandria", "Giza"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
