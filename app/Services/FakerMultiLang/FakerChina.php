<?php
namespace App\Services\FakerMultiLang;

use Faker\Provider\Base;

class FakerChina extends Base
{
    protected static $nama = ["Wei", "Li", "Wang", "Zhang"];
    protected static $kota = ["Beijing", "Shanghai", "Guangzhou"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}