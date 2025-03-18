<?php
namespace FakerMultiLang;

use Faker\Provider\Base;

class FakerBrazil extends Base
{
    protected static $nama = ["João", "Maria", "Pedro", "Ana"];
    protected static $kota = ["São Paulo", "Rio de Janeiro", "Brasília"];

    public static function namaLengkap()
    {
        return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }

    public static function kota()
    {
        return static::randomElement(static::$kota);
    }
}
