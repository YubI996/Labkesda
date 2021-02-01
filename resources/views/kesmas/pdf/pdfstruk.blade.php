<!DOCTYPE html>
<html>
    <head>
    <title> Struk Pembayaran Kesmas </title>
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
        </style>
    </head>
    <body>

        <center>
            <h5>SURAT PERMINTAAN PEMERIKSAAN KESEHATAN MASYARAKAT</h5>
        </center>
            <table>
                <tr>
                    <td>
                        No Registrasi : {{$RegisKesmas->no_regis}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama : {{$RegisKesmas->nama}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat : {{$RegisKesmas->alamat}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Pengirim : {{$RegisKesmas->pengirim}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Jenis Sampel : {{$RegisKesmas->jenis_sampel}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Sampling : {{$RegisKesmas->tgl_sampling}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Penerima : {{$RegisKesmas->tgl_penerima}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Deskripsi Sampel : {{$RegisKesmas->deskripsi_sampel}}
                    </td>
                </tr>
            </table>   
            <br>
            <font size="5">Parameter</font>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                </tr>
                @foreach($RegisKesmas->parameter as $data)   
                      
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>Rp {{number_format($data->harga,2,',','.')}}</td>
                    </tr>
                   
                @endforeach
            </table> 

            <table>
                <tr>
                    <td>
                        Total Harga :{{$KmTransaksi}}
                    </td>
                </tr>
            </table>  
    </body>
</html>