<form method="post">
    <label for="txt_name">Nama:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('name'); ?>" id="txt_name" type="text" placeholder="Nama lengkap mahasiswa" name="name" />
    <?= form_error('name', '<small>', '</small>') ?>
    <br />
    <label for="txa_address">Alamat:</label>
    <br />
    <textarea style="margin-bottom: 16px; width: 20%; height: 60px;" value="<?= set_value('address'); ?>" id="txa_address" type="text" placeholder="Alamat lengkap mahasiswa" name="address"></textarea>
    <?= form_error('address', '<small>', '</small>') ?>
    <br />
    <label for="txt_phone_number">No. Telepon:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('phone_number'); ?>" id="txt_phone_number" type="number" placeholder="No. Telepon yang aktif" name="phone_number" />
    <?= form_error('phone_number', '<small>', '</small>') ?>
    <br />
    <input type="submit" name="submit" value="Simpan" />
</form>