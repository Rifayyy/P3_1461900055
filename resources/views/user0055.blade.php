<!DOCTYPE html>
<html>
<head>
    <title>1461900055</title>
    </head>
        <body>
            <h3>Menampilkan Data Plat Nomor</h3>
            <form action="/plat/cari" method="GET">
                <p> Cari No Plat <input type="text" name="lihat" placeholder="cari disini" value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
                  
             <a href="/plat/tambah"> + Data Baru </a>
             <table border="1">
    <th>Id</th>
    <th>No Plat</th>
    <th>Merk</th>
    </tr>
    @foreach($plat as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->no_plat }}</td>
        <td>{{ $p->merk }}</td>
    <td>
    <a href="/plat/edit/{{ $p->id }}">Edit</a>
    |
    <a href="/plat/hapus/{{ $p->id }}">Hapus</a>
    </td>
    </tr>
    @endforeach
    </table>
 </body>
</html>