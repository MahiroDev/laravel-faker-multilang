<?php
namespace App\Services\FakerMultiLang;

use Faker\Provider\Base;

class FakerRusia extends Base
{
    protected static $nama = ["Ivan", "Olga", "Dmitry", "Anna"];
    protected static $kota = ["Moscow", "Saint Petersburg", "Novosibirsk"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}