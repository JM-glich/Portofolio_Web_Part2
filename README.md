# 🎵 Music Portfolio Website - Movid

## Deskripsi Project

Website portofolio ini merupakan pengembangan dari website statis menjadi **website dinamis** menggunakan PHP dan MySQL. Data yang ditampilkan pada website tidak lagi ditulis langsung di dalam kode, melainkan diambil dari database sehingga lebih fleksibel dan mudah dikelola.

---

# Perubahan dari Statis ke Dinamis

Sebelumnya, seluruh data seperti nama, skill, sertifikat, dan pengalaman ditulis langsung pada file HTML. Setelah implementasi PHP, data tersebut diambil dari database menggunakan query SQL.

### Sebelum (HTML Statis)

```html
<h1>MOVID.</h1>
<p>Music Producer • Sound Designer</p>
```

### Sesudah (PHP Dinamis)

```php
<h1><?= $profile['name']; ?></h1>
<p><?= $profile['description']; ?></p>
```

Perubahan ini membuat website lebih fleksibel karena data dapat diubah tanpa mengedit kode program.

---

# Struktur Database

Database yang digunakan bernama:

```sql
music_portfolio
```

Terdiri dari beberapa tabel utama:

**1. Profile**
Menyimpan data utama seperti nama dan deskripsi.

**2. Skills**
Menyimpan daftar skill beserta level (dalam persen).

**3. Certificates**
Menyimpan data sertifikat.

**4. Experience**
Menyimpan riwayat pengalaman.

---

# Koneksi Database

Koneksi database dilakukan menggunakan file `config.php`:

```php
$conn = mysqli_connect("localhost", "root", "", "music_portfolio");
```

Koneksi ini digunakan untuk menghubungkan website dengan database MySQL.

---

# Pengambilan Data

Data diambil menggunakan query SQL dengan fungsi `mysqli_query()` dan `mysqli_fetch_assoc()`.

Contoh:

```php
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
```

---

# Perulangan Data (Looping)

Untuk menampilkan banyak data seperti skill dan sertifikat, digunakan perulangan `while`.

```php
<?php while($row = mysqli_fetch_assoc($skills)) : ?>
  <p><?= $row['skill_name']; ?></p>
<?php endwhile; ?>
```

Perulangan ini memungkinkan data ditampilkan secara otomatis sesuai isi database.

---

# Implementasi pada Website

**Hero Section**
Menampilkan nama dan deskripsi dari tabel `profile`.

**Skills Section**
Menampilkan daftar skill dalam bentuk progress bar dari tabel `skills`.

**Experience Section**
Menampilkan pengalaman dalam bentuk list dari tabel `experience`.

**Certificates Section**
Menampilkan sertifikat dalam bentuk card dari tabel `certificates`.

---

# Hasil Implementasi

Dengan implementasi ini, website memiliki beberapa keunggulan:

* Data dapat diubah tanpa mengedit kode
* Lebih fleksibel dan mudah dikembangkan
* Struktur data lebih terorganisir
* Menggunakan konsep web dinamis

---

# Teknologi yang Digunakan

* HTML5
* CSS3
* Bootstrap 5
* PHP
* MySQL

---

# Kesimpulan

Website portofolio yang awalnya bersifat statis telah berhasil dikembangkan menjadi website dinamis dengan memanfaatkan PHP dan MySQL. Dengan pendekatan ini, pengelolaan data menjadi lebih efisien serta memberikan kemudahan dalam pengembangan fitur di masa depan.
