<div>
@include('livewire.kesmas.parameter.update')
@include('livewire.kesmas.parameter.delete-confirmation')
<h4>Data Parameter Yang Diperiksa</h4>
<div class="row">
	<div class="col-md-8">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
			<ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a data-toggle="tab" href="#TabFisika">Fisika</a>
                </li>
                <li><a data-toggle="tab" href="#TabWajib">Wajib</a>
                </li>
				<li><a data-toggle="tab" href="#TabTambahan">Tambahan</a>
                </li>
				<li><a data-toggle="tab" href="#TabMikrobiologi">Mikrobiologi</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                <div class="product-tab-list tab-pane fade active in" id="TabFisika">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6 mt-2">
									<input wire:model="search" type="text" class="form-control" placeholder="Search...">
								</div>
                                    <div class="col-lg-12">
                                    	<table id="table" class="table">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Nama Parameter</th>
							                        <th data-field="jns">Jenis Parameter</th>
							                        <th data-field="hrg">Harga</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
											@php 
												$no = 1;
											@endphp
                                            @forelse($parameter_fisika as $data)
								                <tr>								                						                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>
														@if($data->jenis === 1)
														<label class="label label-warning">Fisika</label>
														@elseif($data->jenis === 2)
														<label class="label label-warning">Parameter Wajib</label>
														@elseif($data->jenis === 3)
														<label class="label label-warning">Parameter Tambahan</label>
														@elseif($data->jenis === 4)
														<label class="label label-warning">Parameter Mikrobiologi</label>
														@endif
													</td>
	                                    			<td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
													<td>
													<button data-toggle="modal" data-target="#updateModal" wire:click="editParameter({{ $data->id }})" class="btn btn-warning btn-sm">Edit</button>
													<button data-toggle="modal" data-target="#destroyModal" wire:click="destroyModalParameter({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
													</td>	                            
	                                    		</tr>
												@empty
												<tr>
													<td colspan="8"><center>Data Tidak Ada</center></td>
												</tr>
												@endforelse                                                	
	                                    	</tbody>
	                                    </table>
										<div>
											{{$parameter_fisika->links()}}
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="product-tab-list tab-pane fade" id="TabWajib">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
										<div id="wajib" class="modal modal-xl  fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<form action="{{url('admin/store-parameter')}}" method="post">
													@csrf
													<div class="modal-close-area modal-close-df">
														<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
													</div>
													<div class="modal-body">
														<table width="100%">
															<tr>
																<td>Nama Pemeriksaan</td>
															</tr>
															<tr>
																<td><input type="text" name="nama" class="form-control" placeholder="Nama Pemeriksaan..." required></td>
															</tr>
															<tr>
																<td>Jenis Parameter</td>
															</tr>
															<tr>
																<td>
                                                                <select name="jenis" id="" class="form-control" required>
                                                                <option value="1">Fisika</option>
                                                                <option value="2">Parameter Wajib</option>
                                                                <option value="3">Parameter Tambahan</option>
                                                                <option value="4">Parameter Mikrobiologi</option>
                                                                </select>
                                                                </td>
															</tr>
															<tr>
																<td>Harga</td>
															</tr>
															<tr>
																<td><input type="int" name="harga" class="form-control" placeholder="Harga..." required></td>
															</tr>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
														<button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
													</div>
													</form>
												</div>
											</div>
										</div>
                                    	<table id="table" class="table">
                                    		<thead>
							                    <tr>
													<th data-field="id">No.</th>
							                        <th data-field="name">Nama Parameter</th>
							                        <th data-field="jns">Jenis Parameter</th>
							                        <th data-field="hrg">Harga</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php 
												$no = 1;
											@endphp
												@forelse($parameter_wajib as $data)
								                <tr>
												<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>
														@if($data->jenis === 1)
														<label class="label label-warning">Fisika</label>
														@elseif($data->jenis === 2)
														<label class="label label-warning">Parameter Wajib</label>
														@elseif($data->jenis === 3)
														<label class="label label-warning">Parameter Tambahan</label>
														@elseif($data->jenis === 4)
														<label class="label label-warning">Parameter Mikrobiologi</label>
														@endif
													</td>
													<td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
													<td>
													<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
													<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="#"  method="post">
																	<input type="hidden" name="_method" value="PUT">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																    <table width="100%">
                                                                    <tr>
                                                                        <td>Nama Pemeriksaan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="text" name="nama" value="{{$data->nama}}" class="form-control" placeholder="Nama Pemeriksaan..." required></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jenis Parameter</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <select name="jenis" id="" class="form-control" required>
                                                                        <option value="1">Fisika</option>
                                                                        <option value="2">Parameter Wajib</option>
                                                                        <option value="3">Parameter Tambahan</option>
                                                                        <option value="4">Parameter Mikrobiologi</option>
                                                                        </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Harga</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="int" name="harga" value="{{$data->harga}}" class="form-control" placeholder="Harga..." required></td>
                                                                    </tr>
																	</table>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="edit" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-pencil"></i> Edit</button>
																</div>
																</form>
															</div>
														</div>
													</div>

													<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
													<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/delete-dbmasyarakat/'.$data->id)}}" method="post">
																	<input type="hidden" name="_method" value="DELETE">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<input type="hidden" name="id" class="form-control" value="{{$data->id}}">
																	<p>Yakin akan menghapus {{$data->judul}}?</p>
																</div>
																<div class="modal-footer danger-md">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="del" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
																</div>
																</form>
															</div>
														</div>
													</div>
													</td>	
	                                    		</tr> 
												@empty
												<tr>
												<td colspan="7"><center>Data Tidak Ada</center></td>
												</tr>
												@endforelse                                              
	                                    	</tbody>
	                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="product-tab-list tab-pane fade" id="TabTambahan">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
										<div id="tambahan" class="modal modal-xl  fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<form action="{{url('admin/store-parameter')}}" method="post">
													@csrf
													<div class="modal-close-area modal-close-df">
														<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
													</div>
													<div class="modal-body">
														<table width="100%">
															<tr>
																<td>Nama Pemeriksaan</td>
															</tr>
															<tr>
																<td><input type="text" name="nama" class="form-control" placeholder="Nama Pemeriksaan..." required></td>
															</tr>
															<tr>
																<td>Jenis Parameter</td>
															</tr>
															<tr>
																<td>
                                                                <select name="jenis" id="" class="form-control" required>
                                                                <option value="1">Fisika</option>
                                                                <option value="2">Parameter Wajib</option>
                                                                <option value="3">Parameter Tambahan</option>
                                                                <option value="4">Parameter Mikrobiologi</option>
                                                                </select>
                                                                </td>
															</tr>
															<tr>
																<td>Harga</td>
															</tr>
															<tr>
																<td><input type="int" name="harga" class="form-control" placeholder="Harga..." required></td>
															</tr>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
														<button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
													</div>
													</form>
												</div>
											</div>
										</div>
                                    	<table id="table" class="table">
                                    		<thead>
							                    <tr>
													<th data-field="id">No.</th>
							                        <th data-field="name">Nama Parameter</th>
							                        <th data-field="jns">Jenis Parameter</th>
							                        <th data-field="hrg">Harga</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php 
												$no = 1;
											@endphp
												@forelse($parameter_tambahan as $data)
								                <tr>
												<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>
														@if($data->jenis === 1)
														<label class="label label-warning">Fisika</label>
														@elseif($data->jenis === 2)
														<label class="label label-warning">Parameter Wajib</label>
														@elseif($data->jenis === 3)
														<label class="label label-warning">Parameter Tambahan</label>
														@elseif($data->jenis === 4)
														<label class="label label-warning">Parameter Mikrobiologi</label>
														@endif
													</td>
													<td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
													<td>
													<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
													<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="#"  method="post">
																	<input type="hidden" name="_method" value="PUT">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																    <table width="100%">
                                                                    <tr>
                                                                        <td>Nama Pemeriksaan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="text" name="nama" value="{{$data->nama}}" class="form-control" placeholder="Nama Pemeriksaan..." required></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jenis Parameter</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <select name="jenis" id="" class="form-control" required>
                                                                        <option value="1">Fisika</option>
                                                                        <option value="2">Parameter Wajib</option>
                                                                        <option value="3">Parameter Tambahan</option>
                                                                        <option value="4">Parameter Mikrobiologi</option>
                                                                        </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Harga</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="int" name="harga" value="{{$data->harga}}" class="form-control" placeholder="Harga..." required></td>
                                                                    </tr>
																	</table>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="edit" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-pencil"></i> Edit</button>
																</div>
																</form>
															</div>
														</div>
													</div>

													<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
													<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/delete-dbmasyarakat/'.$data->id)}}" method="post">
																	<input type="hidden" name="_method" value="DELETE">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<input type="hidden" name="id" class="form-control" value="{{$data->id}}">
																	<p>Yakin akan menghapus {{$data->judul}}?</p>
																</div>
																<div class="modal-footer danger-md">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="del" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
																</div>
																</form>
															</div>
														</div>
													</div>
													</td>	
	                                    		</tr> 
												@empty
												<tr>
												<td colspan="7"><center>Data Tidak Ada</center></td>
												</tr>
												@endforelse                                              
	                                    	</tbody>
	                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="product-tab-list tab-pane fade" id="TabMikrobiologi">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
										<div id="mikrobiologi" class="modal modal-xl  fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<form action="{{url('admin/store-parameter')}}" method="post">
													@csrf
													<div class="modal-close-area modal-close-df">
														<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
													</div>
													<div class="modal-body">
														<table width="100%">
															<tr>
																<td>Nama Pemeriksaan</td>
															</tr>
															<tr>
																<td><input type="text" name="nama" class="form-control" placeholder="Nama Pemeriksaan..." required></td>
															</tr>
															<tr>
																<td>Jenis Parameter</td>
															</tr>
															<tr>
																<td>
                                                                <select name="jenis" id="" class="form-control" required>
                                                                <option value="1">Fisika</option>
                                                                <option value="2">Parameter Wajib</option>
                                                                <option value="3">Parameter Tambahan</option>
                                                                <option value="4">Parameter Mikrobiologi</option>
                                                                </select>
                                                                </td>
															</tr>
															<tr>
																<td>Harga</td>
															</tr>
															<tr>
																<td><input type="int" name="harga" class="form-control" placeholder="Harga..." required></td>
															</tr>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
														<button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
													</div>
													</form>
												</div>
											</div>
										</div>
                                    	<table id="table" class="table">
                                    		<thead>
							                    <tr>
													<th data-field="id">No.</th>
							                        <th data-field="name">Nama Parameter</th>
							                        <th data-field="jns">Jenis Parameter</th>
							                        <th data-field="hrg">Harga</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php 
												$no = 1;
											@endphp
												@forelse($parameter_mikrobiologi as $data)
								                <tr>
												<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>
														@if($data->jenis === 1)
														<label class="label label-warning">Fisika</label>
														@elseif($data->jenis === 2)
														<label class="label label-warning">Parameter Wajib</label>
														@elseif($data->jenis === 3)
														<label class="label label-warning">Parameter Tambahan</label>
														@elseif($data->jenis === 4)
														<label class="label label-warning">Parameter Mikrobiologi</label>
														@endif
													</td>
													<td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
													<td>
													<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
													<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="#"  method="post">
																	<input type="hidden" name="_method" value="PUT">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																    <table width="100%">
                                                                    <tr>
                                                                        <td>Nama Pemeriksaan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="text" name="nama" value="{{$data->nama}}" class="form-control" placeholder="Nama Pemeriksaan..." required></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jenis Parameter</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <select name="jenis" id="" class="form-control" required>
                                                                        <option value="1">Fisika</option>
                                                                        <option value="2">Parameter Wajib</option>
                                                                        <option value="3">Parameter Tambahan</option>
                                                                        <option value="4">Parameter Mikrobiologi</option>
                                                                        </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Harga</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="int" name="harga" value="{{$data->harga}}" class="form-control" placeholder="Harga..." required></td>
                                                                    </tr>
																	</table>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="edit" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-pencil"></i> Edit</button>
																</div>
																</form>
															</div>
														</div>
													</div>

													<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
													<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/delete-dbmasyarakat/'.$data->id)}}" method="post">
																	<input type="hidden" name="_method" value="DELETE">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<input type="hidden" name="id" class="form-control" value="{{$data->id}}">
																	<p>Yakin akan menghapus {{$data->judul}}?</p>
																</div>
																<div class="modal-footer danger-md">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="del" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
																</div>
																</form>
															</div>
														</div>
													</div>
													</td>	
	                                    		</tr> 
												@empty
												<tr>
												<td colspan="7"><center>Data Tidak Ada</center></td>
												</tr>
												@endforelse                                              
	                                    	</tbody>
	                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
    </div>
</div>
<div class="row">
<div class="col-md-4">
		<div class="card">
			<div class="card-body" style="padding: 10px 15px">
			 	<form wire:submit.prevent="parameterStore">	 	
					 <div class="form-group">
						<label for="exampleFormControlInput1" class="bmd-label-floating">Nama Parameter</label>
						<input wire:model="nama" type="text" class="form-control"  placeholder="Nama Parameter">
						@error('nama')<small class="text-danger">{{$message}}</small> @enderror
					 </div>
					 <div class="form-group">
						<label for="exampleFormControlInput2" class="form-label">Jenis Parameter</label>
						<select wire:model="jenis" id="" class="form-control" required>
                        	<option >Silahkan Pilih Jenis Parameter</option>
                        	<option value="1">Fisika</option>
                        	<option value="2">Parameter Wajib</option>
                        	<option value="3">Parameter Tambahan</option>
                        	<option value="4">Parameter Mikrobiologi</option>
                        </select>
						@error('jenis')<small class="text-danger">{{$message}}</small> @enderror
					 </div>
					 <div class="form-group">
						<label for="exampleFormControlInput3" class="form-label">Harga</label>
						<input wire:model="harga" type="number" class="form-control"  placeholder="Harga">
						@error('harga')<small class="text-danger">{{$message}}</small> @enderror
					 </div>
					 <div class="form-group">
					 	<button type="submit" class="btn btn-primary">Save</button>
					 </div>
				</form>
			</div>	
		</div>
	</div>
</div>
</div>
