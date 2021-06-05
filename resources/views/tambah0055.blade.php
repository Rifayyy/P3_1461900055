<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h3>Tambahkan Data Baru</h3>
    <form action="/plat/store" method="post">
        {{ csrf_field() }}
            Id <input type="text" name="id" required="required"> <br/>
            No Plat <input type="text" name="no_plat" required="required"> <br/>
            Merk <textarea name="merk" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>