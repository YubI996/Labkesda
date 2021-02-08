<div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <h2>Daftar Klinik</h2>
        <p>FORMULIR PERMINTAAN PEMERIKSAAN KLINIK</p>
            <div class="card">
                <div class="card-body" style="padding: 15px 20px; margin: 10px 10px 10px 10px">
                    <h3>Data Pelanggan</h3>
                    <form wire:submit.prevent="save_user">
                        <table class="table">
                                    <tr>
                                        <td>
                                            <label class="" for="q1">Nama Pelanggan </label>
                                        </td>
                                        <td>
                                            <input id="" name="" class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.nama" /> 
                                        </td>
                                    </tr> 
                        
                        
                                    <tr>
                                        <td>
                                            <label class="" for="">Jenis Kelamin</label>

                                        </td>
                                        <td>
                                            <input type="radio" id="p" name="Jenis Kelamin"  value="Perempuan"  wire:model.lazy="userDatas.Jenis Kelamin"/>
                                            <label class="" for="p">Perempuan</label>
                                        </td>
                                        <td>
                                            <input type="radio" id="l" name="Jenis Kelamin"  value="Laki-laki"  wire:model.lazy="userDatas.Jenis Kelamin"/>
                                            <label class="" for="l">Laki-laki</label>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <label class="" for="">Tanggal Lahir </label>

                                        </td>
                                        <td>
                                            <input wire:model="userDatas.tgll" type="date" id="" name="" class="form-control">

                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <td>
                                            <label class="" for="">Usia </label>

                                        </td>
                                        <td>
                                            <input id="" name=""  class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.usia"/> 

                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <label class="" for="">Alamat </label>

                                        </td>
                                        <td>
                                            <input id=""name class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.alamat"/> 

                                        </td>
                                    </tr> 
                        
                                    <tr>
                                        <td>
                                            <label class="" for="">No. Hp </label>

                                        </td>
                                        <td>
                                            <input id="" name=""  class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.no_hp"/> 

                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <label class="" for="">Pengirim </label>

                                        </td>
                                        <td>
                                            <input id=""name class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.pengirim"/> 

                                        </td>
                                    </tr> 
                    
                                    <tr>
                                        <td>
                                            <label class="" for="">Dokter </label>

                                        </td>
                                        <td>

                                            <input id=""name class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.dokter"/> 
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <label class="" for="">Jaminan </label>

                                        </td>
                                        <td>
                                            <input type="radio" id="bpjs" name="jaminan"   value="bpjs"  wire:model.lazy="userDatas.jaminan"/>
                                            <label class="" for="bpjs">BPJS</label>
                                        </td>
                                        <td>
                                            <input type="radio" id="umum" name="jaminan"   value="umum"  wire:model.lazy="userDatas.jaminan"/>
                                            <label class="" for="umum">Umum</label>
                                        </td>
                                    </tr>
                                        <tr>
                                            <td>
                                                <label class="" for="">Nomor Registrasi </label>

                                            </td>
                                            <td>
                                                <input id=""name class="form-control" type="text" maxlength="255" wire:model.lazy="userDatas.no_regis"/> 

                                            </td>
                                        </tr> 
                                    <tr>
                                        <td>

                                            <label for="">Tanggal Pendaftaran </label>
                                        </td>
                                        <td>
                                            <input  class="form-control" wire:model="userDatas.tgl_daftar" type="datetime-local" id="" name="">

                                        </td>
                                    </tr>
                        </table>
                    </form>
                </div>
            </div>
                <form wire:submit.prevent="save_params"></form>
                <h3>Parameter Yang Diperiksa</h3>
                <div class="form-group"  style="margin: 10px 10px ">

                    <div class="col-md-6">
                        @foreach ($params as $k=>$p)
                        <table class="table" style="width: 100%; border : 1px">
                            <thead class="thead-light">
                                <tr align="center">
                                    <td colspan="2" rowspan="1">
                                        <strong style="align-content: center">{{$k}}</strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($p as $i)
                                    <tr>
                                        <th>
                                            <input  type="checkbox" value="{{$i->harga}}" wire:model="paramTerpilih.{{ $i->id }}" name="cb.{{$loop->iteration}}" id="cb.{{$loop->iteration}}">
                                            <label for="cb.{{$loop->iteration}}" >{{$i->nama_param}}</label><br>
                                        </th>
                                        <td>
                                            <label  >Rp. {{number_format($i->harga,0,',','.')}}</label><br>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                    
                </div>                
                <div class="form-group">
                    <span>
                        <h3>
                            Total  : Rp.{{number_format($total,0,',','.')}}

                        </h3>
                    </span>
                </div> 
                <div class="form-group">
                    <table class="table">
                        <tr>
                            <td>
                                <label for="jam">Jam </label>
                                
                            </td>
                            <td>
                                <input id="jam" class="form-control" name="jam" class="" size="2" type="time" maxlength="2" value=""/><br>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input id="" class="form-control" type="submit" name="submit" value="Submit"/>

                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
