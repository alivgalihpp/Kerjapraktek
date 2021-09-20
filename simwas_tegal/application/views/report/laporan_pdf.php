<!DOCTYPE html>
<html><head>

    <title>Cetak Laporan Pengaduan</title>
    

    <!-- <style>
        @page { margin-top: 50px; }
    /* #header { position: fixed; top: -50px; left: 0px; right: 0px; padding: 10px; text-align: center; font-weight: bold; } */
        body {
            font-family: arial, sans-serif;
            margin: 1cm 1cm 1cm 1cm;
            padding:4px
        }

        h2 {
            margin-top: auto;
            text-align: center;
            position: justify;
            left: 0px;
            right: 0px;
        }

        table{
            font: size 5px;
            border-collapse: collapse;
            border: 1px solid black;
            /* page-break-before: avoid;
            page-break-after: avoid;
            page-break-inside: auto;
        } */
    }

        th, td {
            border-collapse: collapse;
            border: 1px solid black;
            word-wrap: break-word;
        }

    </style> -->

    <style>
         #header { position: relative; top: -10px; left: 0px; right: 0px; padding: 5px; text-align: center; font-weight: bold; }
        @font-face {
            font-family: 'Arial';
            font-style: normal;
            font-weight: normal;
        }

        @font-face {
            font-family: 'Arial';
            font-style: normal;
            font-weight: bold;
        }


        body {
            font-family: 'Arial';
            font-size: 14px;
        }

        .header {
            font-size: 15px;
        }


        .table,
        .table td,
        .table th {
            border: 1px solid #2b2b2b;
            text-align: left;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            
        }

        .table th,
        .table td {
            padding: 5px;
        }



        .policy-content .items {
            padding-left: 10px;
        }



        /* width */
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #bdbdbd;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(95, 95, 95);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #464d52;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .div-page{
            page-break-after:always;
            page-break-inside:auto;
        }

        #pusing{
            font: size 5px;
            font color:white;
            border-collapse: collapse;
            border: 1px white;
        }
        


    

    </style>
</head><body>
    
    <h2 class="header" id="header">Daftar Laporan Temuan</h2>
    
    <!-- <div class="cetak">
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div> -->
    
    <table class="table div-page">
        <!-- <tr>
            <th width="20px">No.</th>
            <th width="30px" word-wrap="break-word";>Jenis Pengawasan</th>
            <th width="50px">Tanggal Pelaksanaan</th>
            <th width="40px" word-wrap="break-word";>Tim Pengawasan</th>
            <th width="70px">Obrik</th>
            <th width="50px">Nomor Tanggal LHP</th>
            <th width="100px">Rekomendasi</th>
            <th width="80px">Hasil TL</th>
            <th width="50px">Status</th>
        </tr> -->
        
        
        <tr>
            <td >No.</td>
            <td  >Jenis Pengawasan</td>
            <td >Tanggal Pelaksanaan</td>
            <td  >Tim Pengawasan</td>
            <td >Obrik</td>
            <td >Nomor Tanggal LHP</td>
            <td >Rekomendasi</td>
            <td >Hasil TL</td>
            <td >Status</td>
        </tr>
        
        <?php if (!empty($data)) : ?>
            
        <?php foreach($data as $num => $row) : ?>
            
        <tr >
                                    <td ><?= $num + 1; ?></td>
                                    <td ><?= $row['jenis']; ?></td>
                                    <td ><?= date('d-m-Y', strtotime($row['tanggal_pelaksanaan'])); ?></td>
                                    <td ><?= $row['tim']; ?></td>
                                    <td word-wrap="break-word";><?= $row['obrik']; ?></td>
                                    <td ><?= $row['no_hasil_pengawasan']; ?></br><?= date('d-m-Y', strtotime($row['tanggal_hasil_pengawasan'])); ?></td>
                                    <td word-wrap="break-word";><?= nl2br($row['rekomendasi']); ?></td>
                                    <td word-wrap="break-word";><?= nl2br($row['hasil_tindak_lanjut']); ?></td>
                                    <td class="status"><?= $row['status_pengaduan'] == 0 ? '<span class="badge-warning p-1 rounded-sm">antrian</span>' : ($row['status_pengaduan'] == 1 ? '<span class="badge-blue p-1 rounded-sm">proses</span>' : ($row['status_pengaduan'] == 2 ? '<span class="badge-success p-1 rounded-sm">selesai</span>' : '<span class="badge-danger p-1 rounded-sm">batal</span>')) ?></td>
                                        </td>
                                </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <h3>Tidak ada data!</h3>
    <?php endif; ?>
    </table>
    

</body></html>
