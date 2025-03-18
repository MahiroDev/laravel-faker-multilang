<?php
namespace App\Services\FakerMultiLang;

use Faker\Provider\Base;

class FakerIndonesia extends Base
{
  protected static $nama = ["Budi", "Siti", "Agus", "Dewi"];
    protected static $kota = ["Jakarta", "Surabaya", "Bandung"];
    
    public static function namalengkap()
    {
      return static::randomElement(static::$nama) . ' ' . static::randomElement(static::$nama);
    }
    public static function kota()
    {
    return static::randomElement(static::$kota) . ' ' . static::randomElement(static::$kota);
    }
}