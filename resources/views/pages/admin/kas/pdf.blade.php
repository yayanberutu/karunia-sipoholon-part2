<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add CSS styling for the PDF here */
        .pdf-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .pdf-header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .pdf-header p {
            font-size: 16px;
            margin: 0;
        }

        .pdf-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .pdf-table th,
        .pdf-table td {
            border: 1px solid #000;
            padding: 8px;
        }

        .pdf-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .pdf-table td {
            text-align: center;
        }

        .pdf-total {
            text-align: right;
        }

        .pdf-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="pdf-header">
        <h1>Data Kas</h1>
        <p>Start: {{ $startDate }}</p>
        <p>End: {{ $endDate }}</p>
    </div>

    <table class="pdf-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Kas</th>
                <th>Tanggal Penerimaan</th>
                <th>Kas Keluar/Masuk</th>
                <th>Jumlah</th>
                <th>Sumber Kas</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalIn = 0; $totalOut = 0; ?>
            @foreach ($kas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->inout_date }}</td>
                    <td>
                        @if ($item->in_out === 'in')
                            MASUK
                            <?php $totalIn += $item->amount; ?>
                        @elseif ($item->in_out === 'out')
                            KELUAR
                            <?php $totalOut += $item->amount; ?>
                        @endif
                    </td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->transaction_type }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4"></td>
                <td>Total Kas Masuk:</td>
                <td>{{ number_format($totalIn, 2, ',', '.') }}</td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td>Total Kas Keluar:</td>
                <td>{{ number_format($totalOut, 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <div class="pdf-footer">
        <p>© <?php echo date('Y'); ?> Your Company Name</p>
    </div>
</body>

</html>
