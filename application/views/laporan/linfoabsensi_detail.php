<!-- Full Table -->
<div class="block block-bordered">
	<div class="block-content">
		<a href="{base_url}linfoabsensi/print_report/<?=$nik?>/<?=$bulan?>/<?=$tahun?>" target="_blank" class="btn btn-primary" style="margin-bottom:10px"><i class="fa fa-print"></i> Cetak</a>
		<a href="{base_url}linfoabsensi/export_excel/<?=$nik?>/<?=$bulan?>/<?=$tahun?>" target="_blank" class="btn btn-primary" style="margin-bottom:10px"><i class="fa fa-file-excel-o"></i> Download Excel</a>

    <table class="table table-bordered table-striped">
      <tr>
        <td colspan="10" style="text-align:center;border:none;background-color:#fff;"><b><u>LAPORAN INFORMASI ABSENSI</u></b></td>
      </tr>
      <tr>
        <th style="text-align:center">No.</th>
        <th style="text-align:center">Tanggal</th>
        <th style="text-align:center">Pegawai</th>
        <th style="text-align:center">Absen Masuk</th>
        <th style="text-align:center">Absen Keluar</th>
        <th style="text-align:center">Mac Address</th>
        <th style="text-align:center">Latitude</th>
        <th style="text-align:center">Longitude</th>
        <th style="text-align:center">Keterangan Masuk</th>
        <th style="text-align:center">Keterangan Keluar</th>
      </tr>

      <!-- default variable -->
      <?php $number = 0; ?>
      <?php if ($laporan != '') { ?>
        <?php foreach ($laporan as $row) { ?>
          <?php $number = $number + 1; ?></td>

          <!-- menampilkan data laporan -->
          <tr>
            <td style="text-align:center"><?=$number;?></td>
            <td><?=$row->tanggal;?></td>
            <td><?=$row->namapegawai;?></td>
						<td><?=$row->absenmasuk;?></td>
						<td><?=$row->absenkeluar;?></td>
						<td><?=$row->macaddress;?></td>
            <td><?=$row->latitude;?></td>
            <td><?=$row->longitude;?></td>
            <td><?=$row->keteranganmasuk;?></td>
            <td><?=$row->keterangankeluar;?></td>
          </tr>
        <? } ?>
      <? } ?>

      <tr style="border:none;background-color:#fff;">
        <td colspan="10" style="text-align:right;border-color: #fff;">Absensi PT Dinus Cipta Mandiri - Laporan <?=date("d/m/Y - h:i:s");?></td>
      </tr>
    </table>
  </div>
</div>
