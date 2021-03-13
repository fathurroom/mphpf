<html>

<head>
    <title>M PHP Framework</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>static/favicon.ico" type="image/x-icon">
    <link rel=stylesheet href="<?= base_url(); ?>css/style.css" type="text/css">
</head>

<body bgcolor=#ffffff>
    <!-- NAVBARTOP -->
    <table border=0 width="100%" cellpadding=0 cellspacing=0>
        <tr style="background-color: #ffe4b0;">
            <td width="54px" valign=baseline>
                <img src="<?= base_url(); ?>static/favicon.png" style="width: 50px; height: 50px; margin: 4px;" />
            </td>
            <td style="padding: 4px;">
                <b><a href="<?= base_url('dosen'); ?>">M PHP Framework Sample App</a></b>
            </td>
            <td style="text-align: right; padding: 4px;">
                <a href="<?= base_url('dosen'); ?>">Data Dosen</a>
                <a href="<?= base_url('homeAddress'); ?>">Data Mahasiswa</a>
                <a href="<?= base_url('matkul'); ?>">Mata Kuliah</a>
            </td>
        </tr>
    </table>
    <p />

    <?= $contents; ?>

    <br />
    <p />

    <table bgcolor="#ffe4b0" border=0 width="100%" cellpadding=0 cellspacing=0>
        <tr valign=top>
            <td style="padding: 4px;">
                <p>Copyright(c) <?php echo date('Y'); ?> by Yoppy Yunhasnawa</p>
            </td>
        </tr>
    </table>

    <br />
</body>

</html>