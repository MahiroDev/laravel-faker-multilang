<?php
namespace App\Services\FakerMultiLang;

use Faker\Provider\Base;

class FakerJepang extends Base
{
    protected static $nama = ["Haruto", "Souta", "Yuki", "Hina"];
    protected static $kota = ["Tokyo", "Osaka", "Kyoto"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}