<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import Data Excel</title>
</head>

<body>

    <?php

    include "koneksi.php";

    ?>

    <form method="post" enctype="multipart/form-data" action="upload.php">
        <table cellpadding="10">
            <tr>
                Pilih File:
                <td><input name="santri" type="file" required="required"></td>
            </tr>
            <tr>
                <td><input name="upload" type="submit" value="Import"></td>
            </tr>
        </table>
    </form>

</body>

</html>