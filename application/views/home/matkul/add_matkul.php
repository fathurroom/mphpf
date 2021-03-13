<form method="post">
    <label for="txt_code">Code Mata Kuliah:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('code'); ?>" id="txt_code" type="text" placeholder="Code Mata Kuliah" name="code" />
    <?= form_error('code', '<small>', '</small>') ?>
    <br />
    <label for="txt_name">Nama Mata Kuliah:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('name'); ?>" id="txt_name" type="text" placeholder="Nama Mata Kuliah" name="name" />
    <?= form_error('name', '<small>', '</small>') ?>
    <br />
    <label for="txt_credit">Credit:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" value="<?= set_value('credit'); ?>" id="txt_credit" type="number" placeholder="Credit" name="credit"></input>
    <?= form_error('credit', '<small>', '</small>') ?>
    <br />
    <input type="submit" name="submit" value="Simpan" />
</form>