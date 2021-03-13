<h2>Data Mahasiswa</h2>
<a href="<?= site_url('homeAddress/addStudent'); ?>">Tambah Mahasiswa Baru</a>
<br />
<br />
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">ID</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
        <?php foreach ($all_students as $s) : ?>
            <tr class="data-table-tr">
                <td class="data-table-td"><?php echo $s['id'] ?></td>
                <td class="data-table-td"><?php echo $s['name'] ?></td>
                <td class="data-table-td"><?php echo $s['address'] ?></td>
                <td class="data-table-td"><?php echo $s['phone_number'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>