<h2>Data Dosen</h2>
<a href="<?= site_url('matkul/addMatkul'); ?>">Tambah Mata Kuliah</a>
<br />
<br />
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">Code Mata Kuliah</td>
        <td class="data-table-td">Nama Mata KUliah</td>
        <td class="data-table-td">Credit</td>
    </thead>
    <tbody>
        <?php foreach ($all_matkul as $s) : ?>
            <tr class="data-table-tr">
                <td class="data-table-td"><?php echo $s['code'] ?></td>
                <td class="data-table-td"><?php echo $s['name'] ?></td>
                <td class="data-table-td"><?php echo $s['credit'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>