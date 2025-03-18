# Laravel Faker Multi Bahasa

Faker Multi Bahasa untuk Laravel yang mendukung **Indonesia, Jepang, Korea, dan Tokyo**. Library ini bekerja dengan menambahkan provider khusus ke dalam Faker bawaan Laravel, memungkinkan pembuatan data acak seperti nama dan kota berdasarkan negara yang dipilih. Dibandingkan dengan Faker standar, library ini memberikan keunggulan dalam personalisasi data dengan format yang lebih sesuai dengan budaya masing-masing negara. Dapat digunakan untuk menghasilkan nama dan kota secara acak berdasarkan negara.

---

## 📌 Instalasi

Tambahkan package ini ke dalam project Laravel kamu menggunakan **Composer**:

```bash
composer require sayangku/faker-multilang
```

Setelah itu, Laravel akan otomatis mengenali package ini. Tidak ada konfigurasi tambahan yang diperlukan, cukup pastikan bahwa Faker sudah terinstall di proyek Laravel kamu. Jika ingin memastikan bahwa provider telah ditambahkan dengan benar, kamu bisa mengeceknya dengan menjalankan kode uji coba sederhana menggunakan `dump($faker->namaLengkap());` di dalam controller atau route.

---

## 🚀 Cara Penggunaan

Gunakan **Faker** dalam kode Laravel untuk menghasilkan data acak dari berbagai negara. Faker ini berguna untuk berbagai keperluan, seperti:

- **Testing**: Membuat data dummy untuk menguji fitur aplikasi tanpa perlu memasukkan data manual.
- **Database Seeding**: Mengisi database dengan data awal agar pengembangan lebih mudah.
- **Demo Aplikasi**: Menampilkan contoh data dalam presentasi atau demo produk.

Misalnya, jika kamu sedang membangun sistem pengguna dan membutuhkan data palsu untuk pengujian, Faker ini bisa membantu menghasilkan nama dan kota dari berbagai negara dengan mudah.

### **1️⃣ Load Faker dan Tambahkan Provider**

```php
use Faker\Factory;
use FakerMultiLang\FakerIndonesia;
use FakerMultiLang\FakerJepang;
use FakerMultiLang\FakerKorea;
use FakerMultiLang\FakerTokyo;

$faker = Factory::create();

// Tambahkan provider untuk setiap negara yang ingin digunakan
$faker->addProvider(new FakerIndonesia($faker));
$faker->addProvider(new FakerJepang($faker));
$faker->addProvider(new FakerKorea($faker));
$faker->addProvider(new FakerTokyo($faker));
```

---

### **2️⃣ Generate Data Berdasarkan Negara**

#### **🇮🇩 Indonesia**

```php
echo "Nama Indonesia: " . $faker->namaLengkap() . "\n";
echo "Kota Indonesia: " . $faker->kota() . "\n";
```

📌 **Contoh Output:**

```
Nama Indonesia: Budi Santoso
Kota Indonesia: Jakarta
```

---

#### **🇯🇵 Jepang**

```php
echo "Nama Jepang: " . $faker->namaLengkap() . "\n";
echo "Kota Jepang: " . $faker->kota() . "\n";
```

📌 **Contoh Output:**

```
Nama Jepang: Haruto Yuki
Kota Jepang: Tokyo
```

---

#### **🇰🇷 Korea**

```php
echo "Nama Korea: " . $faker->namaLengkap() . "\n";
echo "Kota Korea: " . $faker->kota() . "\n";
```

📌 **Contoh Output:**

```
Nama Korea: Jisoo Minho
Kota Korea: Seoul
```

---

#### **🏯 Tokyo (Spesifik)**

```php
echo "Nama Tokyo: " . $faker->namaLengkap() . "\n";
echo "Tempat di Tokyo: " . $faker->tempat() . "\n";
```

📌 **Contoh Output:**

```
Nama Tokyo: Takashi Yuki
Tempat di Tokyo: Akihabara
```

---

## 🔥 Kesimpulan

- **Mudah digunakan** dengan **Laravel Faker**.
- Bisa menghasilkan **nama dan kota dari Indonesia, Jepang, Korea, dan Tokyo**.
- **Tanpa konfigurasi tambahan**, cukup install dan langsung pakai.

Silakan dicoba! 🚀😊

---

## 🔧 Troubleshooting

Jika mengalami kendala saat menggunakan Faker Multi Bahasa, berikut beberapa solusi umum:

1. **Class not found error:**
   - Pastikan package sudah diinstal dengan benar menggunakan `composer require sayangku/faker-multilang`.
   - Jalankan `composer dump-autoload` untuk memastikan autoload telah diperbarui.

2. **Data tidak muncul atau kosong:**
   - Pastikan provider sudah ditambahkan dengan benar menggunakan `$faker->addProvider(new FakerIndonesia($faker));`.
   - Coba jalankan `dump($faker->namaLengkap());` untuk melihat apakah data berhasil dihasilkan.

3. **Error saat menjalankan kode di Tinker atau Seeder:**
   - Pastikan semua dependensi Laravel sudah terinstal dan up-to-date dengan menjalankan `composer install`.
   - Jika masih bermasalah, coba gunakan namespace lengkap seperti `\FakerMultiLang\FakerJepang` saat menambahkan provider.

Dengan langkah-langkah ini, diharapkan penggunaan Faker Multi Bahasa menjadi lebih lancar dan tanpa kendala! 🚀

