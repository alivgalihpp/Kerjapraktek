<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row mt-4">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">

            <h3 class="h3 text-gray-900"><i class="fa fa-fw fa-print"></i> Cetak Laporan</h3>

            <div class="card shadow-sm my-3">
                <div class="card-body border-left-info rounded-sm text-justify">
                    <i class="fa fa-fw fa-info-circle fa-lg"></i> <strong> Silahkan pilih range tanggal untuk menemukan list data laporan yang ingin di cetak sebagai laporan.</strong>
                </div>
            </div>

        </div>
        <!-- .col -->
    </div>
    <!-- .row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="<?= base_url('menu/cetak_laporan') ?>" method="post">
                <div class="form-row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="tgl_mulai">Dari Tanggal:</label>
                            <input type="date" name="tgl_mulai" class="form-control shadow-sm border-left-primary" id="tgl_mulai" required>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="tgl_selesai">Sampai Tanggal: </label>
                            <input type="date" name="tgl_selesai" class="form-control shadow-sm border-left-primary" id="tgl_selesai" required>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="filter">Filter Pengawasan <sup class="text-info">Opsional</sup></label>
                            <select name="filter" class="form-control shadow-sm border-left-primary" id="filter">
                                <option value="">-- Pilih Semua --</option>
                                <?php foreach ($jenis as $row) : ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['jenis']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <button type="submit" name="btn-cek" class="btn btn-primary shadow-sm btn-cek float-left" style="margin-top: 2rem;">Cek</button>

                        <button type="submit" name="cetak-pdf" class="btn btn-outline-danger shadow-sm ml-3" style="margin-top: 2rem;">PDF <i class="fa fa-file-pdf"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if (!empty($data)) : ?>
        <div class="row my-1">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                    <th width="40px">No.</th>
                                    <th width="50px">Jenis</br>Pengawa</br>san</th>
                                    <th width="80px">Tanggal</br>Pelak</br>sanaan</th>
                                    <th width="50px">Tim Pengawas</th>
                                    <th width="80px">Obrik</th>
                                    <th width="80px">Nomor</br>Tanggal</br>LHP</th>
                                    <th width="250px">Rekomendasi</th>
                                    <th width="150px">Hasil TL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $num => $row) : ?>
                                <tr>
                                    <td><?= $num + 1; ?></td>
                                    <td><?= $row['jenis']; ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['tanggal_pelaksanaan'])); ?></td>
                                    <td><?= $row['tim']; ?></td>
                                    <td><?= $row['obrik']; ?></td>
                                    <td><?= $row['no_hasil_pengawasan']; ?></br><?= date('d-m-Y', strtotime($row['tanggal_hasil_pengawasan'])); ?></td>
                                    <td><?= nl2br($row['rekomendasi']); ?></td>
                                    <td><?= nl2br($row['hasil_tindak_lanjut']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="row my-1">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="h3 text-center">Data tidak ditemukan!</h3>
            </div>
        </div>
    <?php endif; ?>

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

<!-- date Format -->
<script src="<?= base_url('assets/') ?>js/jquery-dateformat.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>