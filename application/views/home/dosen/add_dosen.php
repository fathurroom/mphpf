<form method="post">
    <label for="nmb_nip">NIP:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('nip'); ?>" id="nmb_nip" type="number" placeholder="NIP Dosen" name="nip" />
    <?= form_error('nip', '<small>', '</small>') ?>
    <br />
    <label for="txt_name">Nama:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('name'); ?>" id="txt_name" type="text" placeholder="Nama lengkap dosen" name="name" />
    <?= form_error('name', '<small>', '</small>') ?>
    <br />
    <label for="txa_address">Alamat:</label>
    <br />
    <textarea style="margin-bottom: 16px; width: 20%; height: 60px;" value="<?= set_value('address'); ?>" id="txa_address" type="text" placeholder="Alamat lengkap dosen" name="address"></textarea>
    <?= form_error('address', '<small>', '</small>') ?>
    <br />
    <label for="txt_prodi">Prodi:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('prodi'); ?>" id="txt_prodi" type="text" placeholder="Prodi" name="prodi" />
    <?= form_error('prodi', '<small>', '</small>') ?>
    <br />
    <label for="txt_prodi">Jurusan:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('jurusan'); ?>" id="txt_jurusan" type="text" placeholder="Jurusan" name="jurusan" />
    <?= form_error('jurusan', '<small>', '</small>') ?>
    <br />
    <label for="txt_phone_number">No. Telepon:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('phone_number'); ?>" id="txt_phone_number" type="number" placeholder="No. Telepon yang aktif" name="phone_number" />
    <?= form_error('phone_number', '<small>', '</small>') ?>
    <br />
    <input type="submit" name="submit" value="Simpan" />
</form>