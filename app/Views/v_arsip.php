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
        <div class="box box-primary ">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-weight:bold; font-size:25px;">Arsip Surat</h3>
                <br>
                <h5 style="font-weight:100px;">
                    Berikut ini adalah surat-surat yang telah terbit dan siarsipkan.
                    <br>Klik "Lihat" untuk menampilkan surat.
                </h5>
            </div>

            <div class="box-body table-responsive offset-1 d-flex col-10">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nomor Surat</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Waktu Pengerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $arsip) :
                            $sanitized = preg_replace('/[^a-zA-Z0-9_\-]/', '', $arsip['nomorsurat']);
                        ?>
                            <tr>
                                <td><?= $arsip['nomorsurat']; ?></td>
                                <td><?= $arsip['idkategori']; ?></td>
                                <td><?= $arsip['judul']; ?></td>
                                <td><?= $arsip['waktuarsip']; ?></td>
                                <td class="action-buttons">
                                    <button type="button" class="btn btn-danger" style="width:35%;" onclick="setDeleteNomorSurat('<?= $arsip['nomorsurat']; ?>'); confirmDelete();">Hapus</button>
                                    <a href="<?= base_url('uploads/') . $sanitized . '.pdf' ?>" class="btn btn-warning" download="<?= $sanitized ?>.pdf">
                                        Unduh
                                    </a>
                                    <a type="submit" class="btn btn-primary" href="<?= base_url('arsip/lihat/') ?><?= $arsip['id']; ?>">Lihat >></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('arsip/tambah') ?>'">
                    <i class="fa fa-plus"> Arsipkan Surat </i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" id="modal-confirm-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Konfirmasi Penghapusan</h4>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus surat ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
                <form id="form-delete" method="post" action="<?= base_url('arsip/hapus'); ?>" style="display: inline;">
                    <input type="hidden" name="nomorsurat" id="delete-nomorsurat" value="">
                    <button type="button" class="btn btn-outline" onclick="confirmDelete();">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        $('#modal-confirm-delete').modal('show');
    }

    // Fungsi untuk mengatur nilai nomorsurat sebelum menghapus
    function setDeleteNomorSurat(nomorsurat) {
        document.getElementById('delete-nomorsurat').value = nomorsurat;
    }
</script>

</html>