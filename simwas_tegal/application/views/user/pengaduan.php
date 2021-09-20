<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- .row -->
    <div class="row">
        <!-- .col -->
        <div class="col-12">

            <?php if ($this->session->flashdata('msg')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Data berhasil <strong><?= $this->session->flashdata('msg'); ?></strong>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('err')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Gagal! Status Laporan sudah <strong><?= $this->session->flashdata('err'); ?></strong>
                </div>
            <?php endif; ?>

            <!-- page heading - judul -->
            <h3 class="h3 mb-2 mt-1 text-gray-900"><i class="fa fa-fw fa-list"></i> <?= $judul; ?></h3>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive shadow-sm">
                        <table class="table table-bordered display" id="tabel">
                            <thead >
                                <tr>
                                    <!-- <th>Check</th> -->
                                    <th width="40px">No.</th>
                                    <th width="50px">Tanggal</br>Input</th>
                                    <th width="60px">Jenis</br>Pengawasan</th>
                                    <th width="60px">Tanggal</br>Pelaksanaan</th>
                                    <th width="60px">Tim</br>Pengawasan</th>
                                    <th width="100px">Obrik</th>
                                    <th width="80px">Nomor</br>Tanggal</br>LHP</th>
                                    <th width="250px">Rekomendasi</th>
                                    <th width="150px">Hasil TL</th>
                                    <th width="70px">Status</th>
                                    <th width="70px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $num => $row) : ?>
                                    <tr>
                                        <!-- <td>
                                            <?php //if ($row['status_pengaduan'] == 0) : ?>
                                                <input type="checkbox" data-id="<?= $row['id'] ?>" data-judul="<?= $row['id'] ?>" data-isi="<?= $row['id'] ?>">
                                            <?php //else : ?>
                                                <span><i class="fa fa-check"></i></span>
                                            <?php //endif; ?>
                                        </td> -->
                                        
                                        <td><?= $num + 1; ?></td>
                                        <td><?= date_format(date_create($row['tgl_pengaduan']), 'd F Y'); ?></td>
                                        <td class="text-justify"><?= $row['jenis']; ?></p></td>
                                        <td class="text-justify"><?= date('d-m-Y', strtotime($row['tanggal_pelaksanaan'])); ?></td>
                                        <td class="text-justify"><?= $row['tim']; ?></td>
                                        <td class="text-justify"><?= $row['obrik']; ?></td>
                                        <td class="text-justify"><?= $row['no_hasil_pengawasan']; ?></br><?= date('d-m-Y', strtotime($row['tanggal_hasil_pengawasan'])); ?></td>
                                        <td class="text-justify" style="width: 25%"><?= nl2br($row['rekomendasi']); ?></td>
                                        <td class="text-justify"><?= nl2br($row['hasil_tindak_lanjut']); ?></td>
                                        <td class="status"><?= $row['status_pengaduan'] == 0 ? '<span class="badge-warning p-1 rounded-sm">antrian</span>' : ($row['status_pengaduan'] == 1 ? '<span class="badge-blue p-1 rounded-sm">proses</span>' : ($row['status_pengaduan'] == 2 ? '<span class="badge-success p-1 rounded-sm">selesai</span>' : '<span class="badge-danger p-1 rounded-sm">batal</span>')) ?></td>
                                        <td>
                                            <button type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#detail-pengaduan" class='btn btn-sm btn-info btn-ubah' data-id="<?= $row['id'] ?>" data-tgl="<?= date('d F Y', strtotime($row['tgl_pengaduan'])) ?>" data-instansi="<?= $row['nama_instansi'] ?>"
                                            data-instansi_id="<?= $row['instansi_id'] ?>" 
                                            data-jenis="<?= $row['jenis'] ?>" 
                                            data-id_jenispengawasan="<?= $row['id_jenispengawasan'] ?>" 
                                            data-tanggal_pelaksanaan="<?= $row['tanggal_pelaksanaan'] ?>" 
                                            data-tim="<?= $row['tim'] ?>" 
                                            data-id_timpengawasan="<?= $row['id_timpengawasan'] ?>" 
                                            data-obrik="<?= $row['obrik'] ?>" 
                                            data-no_hasil_pengawasan="<?= $row['no_hasil_pengawasan'] ?>" 
                                            data-tanggal_hasil_pengawasan="<?= $row['tanggal_hasil_pengawasan'] ?>" 
                                            data-rekomendasi='<?= $row['rekomendasi'] ?>' 
                                            data-hasil_tindak_lanjut='<?= $row['hasil_tindak_lanjut'] ?>' data-status="<?= $row['status_pengaduan'] ?>"><i class="fas fa-fw fa-edit"></i>Edit</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- / .col -->
    </div>
    <!-- / .row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Inspektorat Kota Tegal - <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<div class="modal fade bd-example-modal-lg" id="ubah-pengaduan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header badge-danger">
                <h5 class="modal-title">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('user/ubah_data_aksi', ['id' => 'formEditData']); ?>
                <div class="modal-body" >
                    <div class="form-group">
                        <label for="judul_pengaduan">Nama Instansi</label>
                        <input type="text" name="nama_instansi" class="form-control" id="nama_instansi" readonly>
                        <input type="hidden" name="instansi_id" class="form-control" id="instansi_id" readonly>
                        <input type="hidden" name="id" class="form-control" id="id" readonly>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengaduan">Jenis Pengawasan</label>
                        <select class="form-control select" name="id_jenispengawasan" id="id_jenispengawasan">
                            <option value="">-- Pilih Jenis Pengawasan --</option>
                            <?php foreach ($jenispengawasan as $key): ?>
                                <option value="<?= $key->id ?>"><?= $key->jenis ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengaduan">Tanggal Pelaksanaan</label>
                        <input type="date" name="tanggal_pelaksanaan" class="form-control" id="tanggal_pelaksanaan">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengaduan">Tim Pengawasan</label>
                        <select class="form-control select" name="id_timpengawasan" id="id_timpengawasan">
                            <option value="">-- Pilih Tim Pengawasan --</option>
                            <?php foreach ($timpengawasan as $key): ?>
                                <option value="<?= $key->id ?>"><?= $key->tim ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengaduan">Obrik</label>
                        <input type="text" name="obrik" class="form-control" id="obrik">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengaduan">No. Hasil Pengawasan</label>
                        <input type="text" name="no_hasil_pengawasan" class="form-control" id="no_hasil_pengawasan">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="judul_pengaduan">Tanggal Hasil Pengawasan</label>
                        <input type="date" name="tanggal_hasil_pengawasan" class="form-control" id="tanggal_hasil_pengawasan">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                    <label for="judul_pengaduan">Rekomendasi</label>
                    <textarea type="text" name="rekomendasi" class="form-control" id="rekomendasi" cols="30" rows="4"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="isi_pengaduan">Hasil Tindak Lanjut</label>
                    <textarea name="hasil_tindak_lanjut" class="form-control" id="hasil_tindak_lanjut" cols="30" rows="4" onchange="disabled"></textarea>
                    <div class="invalid-feedback"></div>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function() {

        $('.btn-ubah').click(function(e) {
            $('#ubah-pengaduan').modal()
            $('.modal-body #id').val($(this).data('id'))
            $('.modal-body #nama_instansi').val($(this).data('instansi'))
            $('.modal-body #instansi_id').val($(this).data('instansi_id'))
            $('.modal-body #id_jenispengawasan').val($(this).data('id_jenispengawasan')).trigger('change')
            $('.modal-body #id_timpengawasan').val($(this).data('id_timpengawasan')).trigger('change')
            $('.modal-body #tanggal_pelaksanaan').val($(this).data('tanggal_pelaksanaan'))
            $('.modal-body #obrik').val($(this).data('obrik'))
            $('.modal-body #no_hasil_pengawasan').val($(this).data('no_hasil_pengawasan'))
            $('.modal-body #tanggal_hasil_pengawasan').val($(this).data('tanggal_hasil_pengawasan'))
            $('.modal-body #rekomendasi').val($(this).data('rekomendasi'))
            $('.modal-body #hasil_tindak_lanjut').val($(this).data('hasil_tindak_lanjut'))
            $('#rekomendasi').summernote();
            $('#hasil_tindak_lanjut').summernote();
            
        })

    })
</script>

<!-- Datatables -->
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.rowReorder.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.responsive.min.js"></script>

<script>$('#tabel').DataTable();</script>

<script>
    $(document).ready(function() {
        $("#formEditData").submit(function(e) {
            e.preventDefault()

            var form = $("#formEditData")
            var data = $(this).serialize()

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'json',
                data: data,
                success: function(res) {
                    // jika respon -> status = true
                    if (res.status) {
                        $('#ubah-pengaduan').modal('toggle')
                        location.reload()
                        // jika respon -> status = false
                    } else {
                        $.each(res.errors, function(key, value) {
                            $('[name="' + key + '"]').addClass('is-invalid');
                            $('[name="' + key + '"]').next().text(value);
                            if (value == "") {
                                $('[name="' + key + '"]').removeClass('is-invalid');
                                $('[name="' + key + '"]').addClass('is-valid');
                            }
                        })
                    }
                }
            })
        })
    })
</script>
<script src="<?= base_url('assets/'); ?>js/summernote/summernote.min.js"></script>
<script>
    document.getElementById("#rekomendasi").val($(this).data('rekomendasi');

    
</script>

</body>

</html>