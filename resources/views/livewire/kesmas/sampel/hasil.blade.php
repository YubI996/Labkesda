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
           <div class="card">
               <div class="card-body" style="padding: 15px 20px; margin: 10px 10px 10px 10px">
                <form wire:submit.prevent="updateHasil">
                    @forelse($RegisKesmas->parameter as $data)
                    <div class="form-group">
                        <label for="">{{$data->nama}}</label>
                        <input wire:model="hasil.{{$data->id}}" type="text" class="form-control">
                    </div>
                    @empty
                    @endforelse
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
               </div>
           </div>
       </div>
    </div>
</div>
