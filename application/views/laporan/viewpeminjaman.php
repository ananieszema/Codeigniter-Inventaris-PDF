<?php if($hasil_search->num_rows() > 0) { ?>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>Kode Peminjaman</td>
            <td>Tanggal Peminjaman</td>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Nama Pegawai</td>
            <td>Nama Petugas</td>
            <td>Jumlah</td>
        </tr>
    </thead>
        <input type="hidden" name="tanggal1" value="<?php echo $time1;?>">
        <input type="hidden" name="tanggal2" value="<?php echo $time2;?>">
        <?php $no=0; foreach($hasil_search->result() as $row): $no++;?>
        <input type="hidden" name="kode_pinjam[]" value="<?=$row->kode_pinjam?>">
        <input type="hidden" name="tanggal_pinjam[]" value="<?=$row->tanggal_pinjam?>">
        <input type="hidden" name="kode_barang[]" value="<?=$row->kode_barang?>">
        <input type="hidden" name="nama_barang[]" value="<?=$row->nama_barang?>">
        <input type="hidden" name="nama_pegawai[]" value="<?=$row->nama_pegawai?>">
        <input type="hidden" name="nama_petugas[]" value="<?=$row->nama_petugas?>">
        <input type="hidden" name="jumlah_pinjam[]" value="<?=$row->jumlah_pinjam?>">
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row->kode_pinjam;?></td>
            <td><?php echo $row->tanggal_pinjam;?></td>
            <td><?php echo $row->kode_barang; ?></td>
            <td><?php echo $row->nama_barang;?></td>
            <td><?php echo $row->nama_pegawai; ?></td>
            <td><?php echo $row->nama_petugas;?></td>
            <td><?php echo $row->jumlah_pinjam;?></td>
        </tr>
        <?php endforeach;?>
</table>

<?php }else{ ?>
<p class="text-center"><strong> ~ Maaf Data Belum Tersedia ~ </strong></p>
<?php } ?>