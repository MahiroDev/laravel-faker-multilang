<?php
namespace App\Services\FakerMultiLang;

use Faker\Provider\Base;

class FakerKorea extends Base
{
    protected static $nama = ["Jisoo", "Minho", "Taehyung", "Hana"];
    protected static $kota = ["Seoul", "Busan", "Incheon"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota) . ' ' . static::randomElement(static::$nama);
    }
}