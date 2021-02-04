<div>
   <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body" style="padding: 15px 20px; margin: 10px 10px 10px 10px">
                    <h3>Data Kesmas</h3>
                    <table class="table">
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
                            <td>Status</td>
                            <td>
                                @if($RegisKesmas->status_regis === 0)
								<label class="label label-danger">Parameter Tidak Tersedia</label>
								@elseif($RegisKesmas->status_regis === 1)
								<label class="label label-danger">Belum Dibayar</label>
								@elseif($RegisKesmas->status_regis === 2)
								<label class="label label-warning">Proses</label>
								@elseif($RegisKesmas->status_regis === 3)
								<label class="label label-success">Terverif</label>
								@endif
                            </td>
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
                </div>
            </div>
            <form wire:submit.prevent="submit">
                <div class="form-group" style="margin: 10px 10px ">
                            <h3>Daftar Parameter</h3>
                            <div class="col-md-6">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                        <center>
                                            <th colspan="3">Fisika</th>
                                        </center>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($parameter_fisika as $index => $data)
                                        <tr>
                                        <td><input type="checkbox" value="{{$data->harga}}" wire:model="check_parameter.{{$data->id}}" class="form-check-input" id="exampleCheck1"></td>
                                        <td>{{$data->nama}}</td>
                                        <td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
                                        </tr>
                                    @empty
                                    <td colspan="3"> </td>
                                    @endforelse
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                        <th colspan="3">Parameter Wajib</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($parameter_wajib as $index => $data)
                                        <tr>
                                        <td> <input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                        <td>{{$data->nama}}</td>
                                        <td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
                                        </tr>
                                    @empty
                                    <td colspan="3"> </td>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                        <th colspan="3">Parameter Tambahan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($parameter_tambahan as $index => $data)
                                        <tr>
                                        <td> <input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                        <td>{{$data->nama}}</td>
                                        <td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
                                        </tr>
                                    @empty
                                    <td colspan="3"> </td>
                                    @endforelse
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                        <th colspan="3">Parameter Mikrobiologi</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                    @forelse($parameter_mikrobiologi as $index => $data)
                                        <tr>
                                        <td> <input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                        <td>{{$data->nama}}</td>
                                        <td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
                                        </tr>
                                    @empty
                                    <td colspan="3"> </td>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                        <span>
                            Total : Rp.{{ number_format($total_harga,2,',','.')}}
                        </span>  
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Add Parameter</button>                    
                        </div>
            </form>
       </div>
   </div>
</div>
