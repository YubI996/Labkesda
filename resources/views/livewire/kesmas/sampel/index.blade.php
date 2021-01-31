<div>
<h4>Data Registrasi</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">              
    <div class="review-content-section">
        <div class="row">
			<div class="col-md-6">
                  <a href="{{route('kesmas.createSampel')}}" class="btn btn-primary btn-sm">Add</a>
			</div>
			<div class="col-md-6 mt-2">
					<input wire:model="search" type="text" class="form-control" placeholder="Search...">
			</div>
                <div class="col-lg-12">
                        <table id="table" class="table">
                            <thead>
							    <tr">
							        <th data-field="id">No.</th>
							        <th data-field="name">No Register</th>
							        <th data-field="jns">Nama</th>
							        <th data-field="hrg">Tanggal Penerima</th>
							        <th data-field="sts">Status</th>
							        <th data-field="param">Parameter</th>
							        <th data-field="action">Aksi</th>
							    </tr>
							</thead>
							<tbody>
							@forelse($RegisKesmas as $index=>$data)
								<tr>								                						                    
	                                <td>{{$index + 1}}</td>
                                    <td>{{$data->no_regis}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->tgl_penerima}}</td>
                                    <td>
										@if($data->status_regis === 0)
										<label class="label label-danger">Parameter Tidak Tersedia</label>
										@elseif($data->status_regis === 1)
										<label class="label label-danger">Belum Dibayar</label>
										@elseif($data->status_regis === 2)
										<label class="label label-warning">Proses</label>
										@elseif($data->status_regis === 3)
										<label class="label label-success">Terverif</label>
										@endif
									</td>
                                    <td><a href="{{route('kesmas.createParameterSampel', $data->id)}}" class="btn btn-primary btn-sm">Add</a></td>
                                    <td>
									
									<button data-toggle="modal" data-target="#destroyModal"  class="btn btn-danger btn-sm">Delete</button>
									</td>	                            
	                            </tr>
							@empty
								<tr>
									<td colspan="5"><center>Data Tidak Ada</center></td>
								</tr>
							@endforelse	                                               	
	                        </tbody>
	                    </table>
						<div>
							<button></button>
						</div>
                </div>
            </div>
        </div>              
    </div>
</div>
</div>
