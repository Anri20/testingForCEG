<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nama</th>
                <th>Gender</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($semua_pemain as $pemain)
                <tr>
                    <td>{{ $pemain->idpemain }}</td>
                    <td>{{ $pemain->nama }}</td>
                    <td>{{ $pemain->gender }}</td>
                    <td><a href="{{ route('pemain.show', ['pemain' => $pemain->idpemain]) }}">Detail</a></td>
                    <td><a href="{{ route('pemain.edit', ['pemain' => $pemain->idpemain]) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('pemain.destroy', ['pemain' => $pemain->idpemain]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{ route('pemain.create') }}">Tambah data disini</a>
    </div>
    <br>

    <div>
        {{-- Isi pesan dari controller --}}
    </div>
</body>

</html>
