<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <table align="center" style="border: 0px;">
                <tr>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Bontang_City_Vector_Logo.svg/748px-Bontang_City_Vector_Logo.svg.png" width="80" height="80" alt=""></td>
                    <td>
                        <center>
                            <font size="4">PEMERINTAH KOTA BONTANG</font><br>
                            <font size="4">DINAS KESEHATAN</font><br>
                            <font size="5"><b>UPT LABORATORIUM KESEHATAN</b></font><br>
                            <font size="2"><i>JL. Jend. Ahmad Yani No.01 Telp/ Fax. ( 0548 ) 3551507 Kode Pos 7531</i></font><br>
                            <font size="2">BONTANG</font><br>
                        </center>
                    </td>
                    <td><img src="https://dinkes.sanggau.go.id/wp-content/uploads/2018/10/cropped-logo-kemenkes-baru-2016-2.png" width="80" height="80" alt=""></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr align="right">
                    <td colspan="4"><font size="2">CM.104.ADM.LK6474</font></td>
                </tr>
            </table>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:10px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        .table-invoice{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td.table-invoice, tr.table-invoice, th.table-invoice{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th.table-invoice{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table-invoice">
            <caption>
                Invoice Kesehatan Masyarakat
            </caption>
            <thead>
                <tr class="table-invoice">
                    <th class="table-invoice" colspan="3">Invoice <strong>#{{ $RegisKesmas->no_regis }}</strong></th>
                    <th class="table-invoice">{{ $RegisKesmas->created_at->format('D, d M Y') }}</th>
                </tr>
                <tr class="table-invoice">
                    <td class="table-invoice" colspan="2">
                        <h4>Perusahaan: </h4>
                        <p>UPT Laboratorium Kesehatan Daerah<br>
                           ( 0548 ) 3551507<br>
                            BONTANG
                        </p>
                    </td>
                    <td class="table-invoice" colspan="2">
                        <h4>Pelanggan: </h4>
                        <p>{{ $RegisKesmas->nama }}<br>
                           {{ $RegisKesmas->alamat }}
                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr class="table-invoice">
                    <th class="table-invoice" colspan="2">Parameter Yang Diperiksa</th>
                    <th class="table-invoice" colspan="2">Harga</th>
                </tr>
                @foreach ($RegisKesmas->parameter as $data)
                <tr class="table-invoice">
                    <td class="table-invoice" colspan="2">{{ $data->nama }}</td>
                    <td class="table-invoice" colspan="2">Rp {{ number_format($data->harga) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="table-invoice">
                    <th class="table-invoice" colspan="3">Total</th>
                    <td class="table-invoice">Rp {{ $KmTransaksi }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>