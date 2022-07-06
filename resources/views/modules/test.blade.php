<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>
                    nama
                </th>
                <th>kode order</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $pemesanan AS $e => $p )
            <tr>
                <td>{{ $p->nama_lengkap }}</td>
                <td>{{ $p->kd_order }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>