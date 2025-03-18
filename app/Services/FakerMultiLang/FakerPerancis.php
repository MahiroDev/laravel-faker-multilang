<?php
namespace App\Services\FakerMultiLang;

use Faker\Provider\Base;

class FakerPerancis extends Base
{
    protected static $nama = ["Pierre", "Marie", "Jean", "Sophie"];
    protected static $kota = ["Paris", "Lyon", "Marseille"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}