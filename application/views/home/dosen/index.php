<h2>Data Dosen</h2>
<a href="<?= site_url('dosen/addDosen'); ?>">Tambah Dosen Baru</a>
<br />
<br />
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">NIP</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">Prodi Jurusan</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
        <?php foreach ($all_dosen as $s) : ?>
            <tr class="data-table-tr">
                <td class="data-table-td"><?php echo $s['nip'] ?></td>
                <td class="data-table-td"><?php echo $s['name'] ?></td>
                <td class="data-table-td"><?php echo $s['address'] ?></td>
                <td class="data-table-td"><?php echo $s['prodi'] ?></td>
                <td class="data-table-td"><?php echo $s['phone_number'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>