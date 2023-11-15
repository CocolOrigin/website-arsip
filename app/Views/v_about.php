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
                <h3 class="box-title" style="font-weight:bold; font-size:30px; margin-left:15px;">About</h3>
            </div>

            <div class="box-body table-responsive offset-1 d-flex flex-row">
                <table>
                    <tr>
                        <td>
                            <img src="<?= base_url('images/foto.jpeg'); ?>" alt="image" style="width: 200px; height: auto; margin-right: 50px">
                        </td>
                        <td>
                            <p>
                                Aplikasi ini dibuat oleh:<br>
                                Nama: Firdaus Syazwana Handyana Putra<br>
                                Prodi: D3-MI PSDKU Kediri<br>
                                NIM: 2131730105<br>
                                Tanggal: 15 November 2023
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
    </div>
</div>

</html>