# PrakIOT
PENJELASAN ARDUINO
1. Pada baris 1 sampai 3 memasukan library yang digunakan
2. Pada baris 6 sampai 8 menyatakan jaringan yang digunakan
3. Pada baris 11 dan 12 membuat hostname dan menyambungkan jaringan inernet
4. Pada baris 14 mengecek sebuah kondisi wifi
5. Pada baris 16 nodemcu memulai untk koneksi
6. Pada baris 19 jika berhasil akan menampilkan pesan WiFi Connected
7. Pada baris 25  jika berhasil akan menampilkan pesan Connection Failed
8. Pada baris 28 sampai 30 mengirim data ke server dan mengecek sebuah link input hasil sensor ke dalam database.

PENJELASAN CEKSESNOR.PHP
Pada baris 2  menyambungkan koneksi ke DB
Pada baris 4  mengambil data dari sensor
Pada baris 5  mengambil data array
Pada baris 6  mengambil nilai sensor dengan array
Pada baris 8  mencetak nilai pada atribut

PENEJELASAN WEBSITE.PHP
Pada baris 11 sampai 17 digunakan untuk mengambildata

PENJELASAN KIRIM DATA.PHP
Pada baris 2 menyambungkan koneksi dengan DB yang sudah dibuat
Pada baris 4  mendapatkan nilai sensor dari arduino
Pada baris 6 Mengubah nilai kedalam database
