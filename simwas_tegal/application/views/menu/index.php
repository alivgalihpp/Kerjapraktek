<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- .row -->
    <div class="row">
        <!-- .col -->
        <div class="col-12">

            <!-- welcome message -->
            <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Selamat datang <strong><?= $this->session->flashdata('message'); ?></strong>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('msg')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Data berhasil <strong><?= $this->session->flashdata('msg'); ?></strong>
                </div>
            <?php endif; ?>

            <!-- page heading - judul -->
            <h3 class="h3 mb-2 mt-1 text-gray-900"><i class="fa fa-fw fa-list"></i> <?= $judul; ?></h3>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-pengaduan" class="table table-striped display" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Input</th>
                                    <th>Nama Instansi</th>
                                    <th>Jenis Pengawasan</th>
                                    <th>Tim Pengawas</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengaduan as $num => $row): ?>
                                    <tr>
                                        <td><?= $num + 1; ?></td>
                                        <td><?= date_format(date_create($row['tgl_pengaduan']), 'd F Y'); ?></td>
                                        <td class="text-justify"><?= $row['nama_instansi'] ?></td>
                                        <td class="text-justify"><?= $row['jenis']; ?></td>
                                        <td class="text-justify"><?= $row['tim']; ?></td>
                                        <td class="status"><?= $row['status_pengaduan'] == 0 ? '<span class="badge-warning p-1 rounded-sm">antrian</span>' : ($row['status_pengaduan'] == 1 ? '<span class="badge-blue p-1 rounded-sm">proses</span>' : ($row['status_pengaduan'] == 2 ? '<span class="badge-success p-1 rounded-sm">selesai</span>' : '<span class="badge-danger p-1 rounded-sm">batal</span>')) ?></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#detail-pengaduan" class='btn btn-sm btn-info btn-hapus' data-id="<?= $row['id'] ?>" data-tgl="<?= date('d F Y', strtotime($row['tgl_pengaduan'])) ?>" data-instansi="<?= $row['nama_instansi'] ?>" data-jenis="<?= $row['jenis'] ?>" 
                                            data-tanggal_pelaksanaan="<?= date('d-m-Y', strtotime($row['tanggal_pelaksanaan'])) ?>" 
                                            data-tim="<?= $row['tim'] ?>" 
                                            data-obrik="<?= $row['obrik'] ?>" 
                                            data-no_hasil_pengawasan="<?= $row['no_hasil_pengawasan'] ?>" 
                                            data-tanggal_hasil_pengawasan="<?= date('d-m-Y', strtotime($row['tanggal_hasil_pengawasan'])) ?>" 
                                            data-rekomendasi='<?= $row['rekomendasi'] ?>' 
                                            data-hasil_tindak_lanjut='<?= $row['hasil_tindak_lanjut'] ?>' data-status="<?= $row['status_pengaduan'] ?>"><i class="fas fa-fw fa-edit"></i> Detail</button>
                <button type="button" data-toggle="modal" data-target="#hapus-pengaduan" class='btn btn-sm btn-danger btn-hapus' data-id="<?= $row['id'] ?>"><i class="fas fa-fw fa-trash-alt"></i> Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
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

<!-- Detail -->
<div class="modal fade" id="detail-pengaduan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title">Detail Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/ubah_status'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_pengaduan">
                    <table class="table table-bordered text-justify text-gray-900">
                        <tr>
                            <td>Tanggal</td>
                            <td class="tgl"></td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td class="instansi"></td>
                        </tr>
                        <tr>
                            <td>Detail</td>
                            <td class="detail"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td class="status"></td>
                        </tr>
                        <tr>
                            <td>Ubah Status</td>
                            <td>
                                <select name="status_pengaduan" id="status" class="form-control" required>
                                    <option value=""> -- PILIH STATUS TERBARU -- </option>
                                    <option value="0">Antrian</option>
                                    <option value="1">Proses</option>
                                    <option value="2">Selesai</option>
                                    <option value="3">Batal</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah Status Laporan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Box - Hapus Data -->
<div class="modal fade" id="hapus-pengaduan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/hapus_data'); ?>" method="post">
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
                </div>
            </form>
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

<!-- Datatables -->
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.rowReorder.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.responsive.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function() {

        // DataTables - ebook
        //dataTables_pengaduan();
        $('#table-pengaduan').DataTable();

        // function dataTables_pengaduan() {
        //     $('#table-pengaduan').DataTable({
        //         responsive: true,
        //         "destroy": true,
        //         "processing": true,
        //         "serverSide": true,
        //         "order": [],

        //         "columnDefs": [{
        //             "targets": [0, 4],
        //             "orderable": false
        //         }],
        //         scrollY: "300px",
        //         scrollX: true,
        //         // scrollCollapse: false,
        //         // paging: true,

        //         "lengthMenu": [
        //             [5, 10, 30, 50, -1],
        //             [5, 10, 30, 50, "All"]
        //         ],

        //         "ajax": {
        //             "url": "",
        //             "type": "POST"
        //         },

        //     })
        // }

        // var table = $('#table-pengaduan').DataTable()
        // table.columns([4]).visible(false);

        // Modal Box - Pengaduan
        $(document).on("click", ".btn-hapus", function() {
            let status = $(this).data('status')
            status == 0 ? status = 'antrian' : (status == 1 ? status = 'proses' : (status == 2 ? status = 'selesai' : status = 'gagal'))

            $(".modal-body #id_pengaduan").val($(this).data('id'))
            $(".modal-body table .tgl").html($(this).data('tgl'))
            $(".modal-body table .instansi").html($(this).data('instansi'))
            $(".modal-body table .detail").html("<p>Jenis Pengawasan : " + $(this).data('jenis') + "</p>" + 
                                            "<p>Tanggal Pelaksanaan : " + $(this).data('tanggal_pelaksanaan') + "</p>" +
                                            "<p>Jenis Pengawasan : " + $(this).data('tim') + "</p>" +
                                            "<p>Obrik : " + $(this).data('obrik') + "</p>" +
                                            "<p>Nomor Hasil Pengawasan : " + $(this).data('no_hasil_pengawasan') + "</p>" +
                                            "<p>Tanggal Hasil Pengawasan : " + $(this).data('tanggal_hasil_pengawasan') + "</p>" +
                                            "<p>Rekomandasi : " + $(this).data('rekomendasi') + "</p>" +
                                            "<p>Hasil Tindak Lanjut : " + $(this).data('hasil_tindak_lanjut') + "</p>")
            $(".modal-body table .status").html(status)
        })

        $(document).on("click", ".btn-hapus", function() {
            $(".modal-body #id").val($(this).data('id'))
        })

    });
</script>

</body>

</html>