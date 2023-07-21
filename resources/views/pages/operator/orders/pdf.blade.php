<html>

<head>
    <title>Daftar Transaksi Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;

            /** Extra personal styles **/
            background-color: white;
            color: black;
            text-align: left;
            font-size: 10px;
        }
    </style>
    <center>
        <h5>Laporan Transaksi Pembelian</h5>
        <h6>Karunia Sipoholon</h6>
    </center>
    <br>
    <table class='table table-bordered' style="margin-left: -42.5px">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Code Pesanan</th>
                <th>Nama Pemesan</th>
                <th>Nomor Hp</th>
                <th>Menu Pesanan</th>
                <th>Total Biaya</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Pemesanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $pemesanan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pemesanan->code }}</td>
                    <td class="text-nowrap">{{ $pemesanan->user->fullname }}</td>
                    <td>{{ $pemesanan->user->phone }}</td>
                    <td style="width:125px;">
                        @foreach ($pemesanan->pemesananDetails as $item)
                            - {{ $item->product->title }}
                            <br>
                        @endforeach
                    </td>
                    <td>Rp.{{ $pemesanan->total }}</td>
                    <td class="text-nowrap">{{ $pemesanan->payment }}</td>
                    <td class="text-nowrap">{{ $pemesanan->created_at->translatedFormat('l, d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <footer>
        <hr>
        Karunia Sipoholon - {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
    </footer>
</body>

</html>
