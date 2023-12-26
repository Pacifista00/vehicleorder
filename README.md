## DetailProyek
Database 10.4.28-MariaDB
PHP 8.1.17
Laravel10
Bootstrap5

## Akun
- Superior
    user = superior
    password = superior123
- Admin
    user = admin
    password = admin123

## Penggunaan

1. Login
    Setelah Login, baik Superior Maupun Admin akan mengarah ke halaman yang sama yaitu halaman 'Dashboard', tetapi dengan hak akses yang berbeda.
2. Dashboard
    Pada halaman dashboard semua user dapat melihat data jumlah penggunaan BBM pada setiap kendaraan.
3. Form Pemesanan Kendaraan
    Form ini hanya bisa diakses oleh admin. Admin akan menginputkan data peminjaman kendaraan yang nantinya akan disetujui oleh Superior.
4. Daftar Pengajuan Peminjaman Kendaraan
    Halaman ini berisikan semua data pengajuan peminjaman kendaraan. Baik Superior maupun Admin dapat mengakses halaman ini. Tetapi, tampilan dan hak aksesnya berbeda. Superior bisa melakukan persetujuan maupun penolakan pengajuan peminjaman kendaraan dari Admin pada halaman ini.
    Sedangkan Admin hanya bisa melihat status dari setiap pengajuan dan melakukan konfirmasi ketika kendaraan sudah selesai dipakai.
    Berikut beberapa status pengajuan yang saya buat:
        -Submitted = Peminjaman sudah diajukan oleh Admin namun belum mendapat respon dari Superior. 
        -Rejected = Peminjaman telah ditolak oleh Superior. 
        -Accepted = Peminjaman telah disetujui oleh Superior. 
        -Done = Kendaraan telah selesai dipakai dan peminjaman selesai.
5. Jadwal Service
    Pada halaman ini saya menentukan waktu service setiap kendaraan yaitu setiap 3 bulan sekali. Ketika kendaraan sudah waktunya diservice, Admin bertanggung jawab melakukan konfirmasi kendaraan yang telah diservice. Tombol service akan otomatis ter-disable ketika kendaraan belum masuk waktu service. Superior hanya bisa memantau status kendaraan.
6. Riwayat
    Halaman Riwayat hanya dapat diakses oleh Superior. Pada halaman ini user dapat melihat rekap semua data peminjaman kendaraan.
7. Export Excel
    Untuk mengunduh rekap peminjaman kendaraan dapat dilakukan di halaman 'Riwayat'.
    Catatan : data yang diunduh hanya data peminjaman yang berstatus 'Done' atau peminjaman yang sudah selesai, karena didalam file yang diunduh tersebut terdapat waktu kendaraan selesai dipakai.


