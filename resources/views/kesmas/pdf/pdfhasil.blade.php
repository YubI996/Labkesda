<!DOCTYPE html>
<html>
    <head>
    <title> Hasil Kesmas </title>
            <table align="center">
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
                margin-left:1cm;
            }
            .table-hasil{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:100%;
            }
            td.table-hasil, tr.table-hasil, th.table-hasil{
                padding:12px;
                border:1px solid #333;
                width:100%;
            }
            th.table-hasil{
                background-color: #f0f0f0;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>No Register</td>
                <td>{{$RegisKesmas->no_regis}}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{$RegisKesmas->nama}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{$RegisKesmas->alamat}}</td>
            </tr>
            <tr>
                <td>Pengirim</td>
                <td>{{$RegisKesmas->pengirim}}</td>
            </tr>
            <tr>
                <td>Jenis Sampel</td>
                <td>{{$RegisKesmas->jenis_sampel}}</td>
            </tr>
            <tr>
                <td>Tanggal Penerima</td>
                <td>{{$RegisKesmas->tgl_penerima}}</td>
            </tr>
            <tr>
                <td>Tanggal Sampling</td>
                <td>{{$RegisKesmas->tgl_sampling}}</td>
            </tr>
        </table>
        <br>
        <table class="table-hasil">
            <tr class="table-hasil">
                <th class="table-hasil">Nama Parameter</th>
                <th class="table-hasil">Hasil</th>
            </tr>
                @foreach($RegisKesmas->parameter as $data)
            <tr class="table-hasil">
                <td class="table-hasil">{{$data->nama}}</td>
                <td class="table-hasil">{{$data->pivot->hasil_pemeriksaan}}</td>
            </tr>
                @endforeach
        </table>
    </body>
</html>