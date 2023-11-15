<html>

<?php
if (session()->getFlashdata('updaterole')) {
    echo '<div class="alert alert-danger alert-dismissible">';
    echo session()->getFlashdata('updaterole');
    echo '</div>';
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-weight:bold; font-size:30px; margin-left:15px;">About</h3>
            </div>
            <div class="box-body text-left">
                <!-- Gambar -->
                <img src="<?= base_url('images/ktm_arip.jpg'); ?>" alt="Company Logo" style="max-width: 14%; height: auto; margin-right: 20px;">
                <!-- Tulisan -->
                <p style="margin-top: -90px; font-size:110%; font-family:Segoe UI Semibold;">
                    Aplikasi ini dibuat oleh:<br>
                    Nama: Firdaus Syazwana Handyana Putra<br>
                    Prodi: D3-MI PSDKU Kediri<br>
                    NIM: 2131730105<br>
                    Tanggal: 15 November 2023
                </p>
            </div>
            <br><br><br><br><br><br>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary ">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-weight:bold; font-size:25px;">Kategori Surat</h3>
                <br>
                <h5 style="font-weight:100px;">
                    Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.
                    <br>Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.
                </h5>
            </div>

            <div class="box-body table-responsive offset-1 d-flex col-10">
                <!-- Gambar -->
                <img src="<?= base_url('images/ktm_arip.jpg'); ?>" alt="Company Logo" style="max-width: 14%; height: auto; margin-right: 20px;">
                <!-- Tulisan -->
                <p style="margin-top: -90px; font-size:110%; font-family:Segoe UI Semibold;">
                    Aplikasi ini dibuat oleh:<br>
                    Nama: Firdaus Syazwana Handyana Putra<br>
                    Prodi: D3-MI PSDKU Kediri<br>
                    NIM: 2131730105<br>
                    Tanggal: 15 November 2023
                </p>
                
            </div>
        </div>
    </div>
</div>

</html>