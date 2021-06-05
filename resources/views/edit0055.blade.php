<!DOCTYPE html>
<html>
<head>
<title>1461900055</title>
</head>
<body>
<h3>Edit Pelanggan</h3>
<a href="/plat"> Kembali</a>
<br/>
<br/>
@foreach($plat as $p)
<form action="/plat/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
No Plat <input type="text" required="required" name="no_plat" value="{{ $p->no_plat }}"> <br/>
Merk <textarea required="required" name="merk">{{ $p->merk }}</textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
