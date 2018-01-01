# MIKROTIK HOTSPOT MONITOR
Mikrotik Hotspot Monitor adalah aplikasi berbasis PHP untuk menggantikan User Manager yang tidak didukung dibeberapa tipe RB Mikrotik.

## TENTANG  

1. Aplikasi ini menggunakan dua koneksi ke Mikrotik
    - API port 8728 
      ([routeros-api](https://wiki.mikrotik.com/wiki/API_PHP_class))
    - SSH port 2219 disarankan untuk mengganti port default ssh di Mikrotik Anda. 
      ([phpseclib MIT-licensed](http://phpseclib.sourceforge.net/ssh/intro.html))

2. Pastikan Jam dan Tanggal di Mikrotik sudah update sesuai wilayah masing-masing. Dan isi Rate Limit pada User Profile "default". Untuk pengaturan Jam dan Tanggal bisa baca [di sini](http://www.mikrotik.co.id/artikel_lihat.php?id=55).

3. Khusus untuk yang masih menggunakan RouterOS versi 5, edit file uprofileadd.php, cari line 119 hapus "add-mac-cookie=no" kemudian simpan.

## FITUR  

1. Menampilkan User Hotspot yang aktif dan masa aktifnya.
2. Membuat, edit dan hapus User Profile.
3. Menampilkan User Hotspot berdasarkan User Profile.
4. Menghapus User Hotspot berdasarkan Username.
5. Generate 1 Voucher.
6. Generate 21 Voucher.
7. Cetak Voucher. *Sebaiknya menggunakan kertas A4.
8. Custom warna Voucher
9. Add Remove DNS Static untuk blok website.

## MANAGEMEN USER

Jangan khawatir dengan user yang dibuat dari aplikasi ini akan terus menumpuk, karena setiap user yang masa aktifnya sudah habis akan terhapus secara otomatis. Ini bekerja berkat script (on login script) yang ditambahkan pada setiap User Profile. Penjelasannya, ketika user login maka user akan membuat jadwal penghapusan sendiri di scheduler. Penghapusan tersebut mencakup penghapusan user dari daftar Users, Active, dan penghapusan di Scheduler. Dengan ini maka tidak perlu lagi melakukan kontrol terhadap user yang sudah habis masa aktifnya. 

## PENGGUNAAN  
1. Aplikasi ini bisa dijalankan menggunakan web server dengan PHP minimum versi 5.3.0 *Belum support PHP v7.

    Download web server :
    
    * Android Web Server : 
      - [PlayStore Bit Web Server](https://play.google.com/store/apps/details?id=com.andi.serverweb&hl=en "Bit Web Server") (berbayar)
      - [allfreeapk.com Bit Web Server](https://m.allfreeapk.com/search.html?q=bit-web-server-php-mysql-pma "Bit Web Server") (gratis)
    * Windows [USBWebserver](http://www.usbwebserver.net/downloads/USBWebserver%20v8.6.zip "USBWebserver")

2. Untuk pertama kali Anda perlu menyesuaikan konfigurasi pada laman setup, dengan login terlebih dahulu
   menggunakan akun default. 
   
   http://localhost/mikhmon/login.php atau http://localhost:8080/mikhmon/login.php
   
      - Username : admin 
      - Password : 1234
    
3. Selanjutnya test koneksi ke Mikrotik, klik tombol tes koneksi (<--->) yaitu tombol kedua dari kiri. Jika koneksi gagal, maka akan muncul notifikasi error (ciri-ciri koneksi gagal, laman dimuat lebih dari 30 detik). Kembali ke laman setup dan sesuaikan kembali konfigurasi Anda.

4. Beberapa video untuk panduan.

     - [Google Drive video panduan install di Windows](https://drive.google.com/open?id=0B-nJrksLMgOzUXdFNlp2dVdXQkU "Panduan Install di Windows")
     - [YouTube video by Laksa19 panduan install di Windows](https://www.youtube.com/watch?v=k-mbO-7Yuck "Panduan Install di Windows")
     - [YouTube video by Rizki Ari panduan install di Windows](https://www.youtube.com/watch?v=SyX5qRcNyj8 "Panduan Install di Windows")
     - [YouTube video by Rizki Ari Panduan Install di Android](https://www.youtube.com/watch?v=EInXupzwJAI "Panduan Install di Android")

5. Penggunaan laman status untuk cek masa aktif voucher. (Catatan laman status memerlukan web server yang aktif terus agar user bisa akses setiap saat).
     - Edit file index.php pada folder status, sesuaikan pada line 84 (ip mikrotik, user dan password).
     - Buka port di walled garden, agar user bisa akses tanpa harus login erlebih dahulu.

6. Template hotspot.
     - Logo hotspot dapat diganti dengan format (logo.png) yang diletakkan di folder "img".
     - Edit file "paket-wifi.csv" untuk menampilkan daftar paket wifi.
     
7. Update aplikasi.
     - Rename folder mikhmon yang lama.
     - Download dan extract folder mikhmon ke web server.
     - Copy config.php dari folder mikhmon yang sudah di raname, kemudian paste di folder mikhmon yang baru.

## Changelog 

16-12-2017

   1. Penambahan 5 profile, total 10 profile yang bisa digunakan untuk berbagai macam paket hotspot wifi.
   2. Penambahan kolom server hotspot ditiap form generate voucher, ini memungkinkan untuk membuat voucher atau user hotspot dengan batasan server hotspot. Jadi voucher hanya bisa digunakan di server hotspot tertentu. Catatan: Sesuaikan nama server  hotspot Mikrotik di laman setup mikhmon.
   3. Perbaikan tampilan desktop, kini dibuat lebih lebar untuk tampilan desktop dan menyesuakan layar saat digunakan di Android.
   4. Perubahan laman dashboard, Header tabel sisa voucher sekarang menggunakan nama profile, bertujuan untuk memudahkan admin mengenali sisa voucher.

29-11-2017

   Perbaikan form setup, konfirmasi pada saat reset config.

28-11-2017

   1. Penambahan form Log Hotspot.
   2. Penambahan form History Remove User, untuk melacak user yang telah dihapus.

26-11-2017

   1. Update setting warna voucher agar tetap menyimpan settingan sebelumnya.
   2. Penambahan cetak di setiap form generate 1 voucher.
   
21-11-2017

   1. Drop operator dan perbaikan resetconfig.
   2. Add Remove DNS Static untuk blok website.
   
10-11-2017

   Penambahan generate user password manual input. (Perubahan di mikhmon: index.php, genkv.php, genkvs.php, genupm.php, genvoucher.php, genvouchers.php, profileadd.php, profilerm.php, profileset.php, vcolorconf.php).

09-11-2017

   Perubahan struktur menu.

07-11-2017

   Perbaikan tamplate hotspot. Penjelasan dibagian [PENGGUNAAN](https://github.com/laksa19/mikrotik-hotspot-monitor#penggunaan) poin 6.

05-11-2017

   Penambahan laman status untuk cek masa aktif vouvher pelanggan. (Perubahan di status: index.php, api.php).

04-11-2017

   1. Penambahan fitur ganerate kode voucher, jadi pelanggan hanya memasukkan kode login saja untuk login. (Perubahan di mikhmon: index.php, file baru: genkv.php, genkvs.php, kvouchers.php, printkvs.php).
   2. Upload template hotspot untuk mendukung login menggunakan kode voucher.

28-10-2017

   1. Perbaikan di file setup.php.
   2. Penambahan jam Mikrotik, untuk mengetahui apakah jam di Mikrotik sudah sesuai. (Perubahan: index.php).

10-10-2017

   Penambahan form untuk pengaturan warna di cetak voucher (Perubahan: printv.php, genvouchers.php, vcolorconf.php, vcolors.php).

09-10-2017

   Perbaikan Setup (perubahan : index.php, setup.php).

07-10-2017

   1. Menambahkan opsi untuk auto reload laman index (perubahan: index.php).
   2. Perbaikan dan penambahan setup aplikasi (perubahan : config.php, login.php, setup.php, conntest.php, resetconfig.php).

06-10-2017

   Menambahkan hak akses user :  1. Administrator,  2. Operator.
   
05-10-2017

  1. Penambahan setup.php untuk memudahkan edit file config.php
  2. Penambahan halaman login.
  3. Beberapa penyesuaian lainnya.  
  
04-10-2017

  1. Penyesuaian config.php
  2. Penyesuaian index.php
  3. Penambahan User Lists, sekarang menjadi 5
  4. Penyederhanaan pembuatan Profile
  5. Penambahan fitur pada generate voucher
       - Batasan Durasi (Limit Uptime)
       - Batasan Kuota (Limit Bytes Out)
  6. Penyesuaian cetak voucher

03-10-2017

  1. Upload pertama.