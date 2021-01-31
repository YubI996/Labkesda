<div>
    <style>
        table, th, td {
        border: 1px solid black;
        /* border-collapse: collapse; */
        /* width: 100%; */
        align-content: space-around;
        }
        th{
            /* width : 50%; */
        }
        table.center {
        margin-left: auto;
        margin-right: auto;
        align-items: center;
        }
    </style>
    <form wire:submit.prevent="save_params()">
        <table class="center" style="width: 100%; border : 1px">
            <thead>
                <tr>
                    <th colspan="3" style="align-items: center">
                        <div class="form_description">
                            <h2>Daftar Klinik</h2>
                            <p>FORMULIR PERMINTAAN PEMERIKSAAN KLINIK</p>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th style="width: 20%;">
                        <div>
                            <label class="" for="q1">Nama Pelanggan </label>
                            <input id="" name class="" type="text" maxlength="255" wire:model.lazy="userDatas.nama" /> 
                        </div> 
            
            
                        <div>
                            <label class="" for="">Tempat Lahir </label>
                            <input id="" name=""  class="" type="text" maxlength="255" wire:model.lazy="userDatas.tptl"/> 
                        </div> 
            
                        <label class="" for="">Tanggal Lahir </label>
                        <input wire:model="userDatas.tgll" type="date" id="" name="">
            
                        <div>
                            <label class="" for="">Usia </label>
                            <input id="" name=""  class="" type="text" maxlength="255" wire:model.lazy="userDatas.usia"/> 
                        </div> 
                       <div>
                            <label class="" for="">Alamat </label>
                            <input id=""name class="" type="text" maxlength="255" wire:model.lazy="userDatas.alamat"/> 
                        </div> 
            
                        <div>
                            <label class="" for="">No. Hp </label>
                            <input id="" name=""  class="" type="text" maxlength="255" wire:model.lazy="userDatas.no_hp"/> 
                        </div> 
                        <div>
                            <h3>Parameter Yang Diperiksa</h3>
                        </div>
                    </th>
                    <th colspan="2">
                         
                        <div>
                            <label class="" for="">Pengirim </label>
                            <input id=""name class="" type="text" maxlength="255" wire:model.lazy="userDatas.pengirim"/> 
                        </div> 
        
                        <div>
                            <label class="" for="">Dokter </label>
                            <input id=""name class="" type="text" maxlength="255" wire:model.lazy="userDatas.dokter"/> 
                        </div> 
            
                        <label class="" for="">Jaminan </label>
                        <div>
                            <input type="radio" id="0_1" name="0_1"  class="" value="bpjs"  wire:model.lazy="userDatas.jaminan"/>
                            <label class="" for="0_1">BPJS</label>
                    
                            <input type="radio" id="0_2" name="0_2"  class="" value="umum"  wire:model.lazy="userDatas.jaminan"/>
                            <label class="" for="0_2">Umum</label>
                        </div>
                            <div>
                            <label class="" for="">Nomor Registrasi </label>
                            <input id=""name class="" type="text" maxlength="255" wire:model.lazy="userDatas.no_regis"/> 
                        </div> 
                        <div>
                            <label class="" for="">Tanggal Pendaftaran </label>
                            <input  wire:model="userDatas.tgl_daftar" type="datetime-local" id="" name="">
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($params as $k=>$p)
                <tr align="center">
                    <td colspan="2" rowspan="1">
                    <strong style="align-content: center">{{$k}}</strong>
                    </td>
                </tr>
                    @foreach ($p as $i)
                    <tr>
                        <th>
                            <input type="checkbox" value="{{$i->harga}}" wire:model="paramTerpilih.{{ $i->id }}" name="cb.{{$loop->iteration}}" id="cb.{{$loop->iteration}}">
                            <label for="cb.{{$loop->iteration}}" class="">{{$i->nama_param}}</label><br>
                        </th>
                        <td>
                            <label class="">Rp. {{number_format($i->harga,0,',','.')}}</label><br>
                        </td>
                    </tr>
                    @endforeach
                @endforeach
                    
                {{-- <tr><!-- tr1-->
                    <td>
                        <div><!-- Hemotologi1-->
                            <H2>
                            Hemotologi

                            </H2>
                            <input type="checkbox" id="element_21_1" name="element_21_1" class=""  value="" alt="asssaaaaah"/>
                            <label for="element_21_1" class="choice">Darah Lengkap</label><br>
                            <input type="checkbox" id="element_21_2" name="element_21_2" class=""  value="1" />
                            <label for="element_21_2" class="choice">Hitung Jenis</label><br>
                            <input type="checkbox" id="element_21_3" name="element_21_3" class=""  value="1" />
                            <label for="element_21_3" class="choice">Laju Endap Darah</label><br>
                            <input type="checkbox" id="element_21_4" name="element_21_4" class=""  value="1" />
                            <label for="element_21_4" class="choice">Masa Pendarahan</label><br>
                            <input type="checkbox" id="element_21_5" name="element_21_5" class=""  value="1" />
                            <label for="element_21_5" class="choice">Masa Pembekuan</label><br>
                            <input type="checkbox" id="element_21_6" name="element_21_6" class=""  value="1" />
                            <label for="element_21_6" class="choice">Golongan Darah</label><br>
                            <input type="checkbox" id="element_21_7" name="element_21_7" class=""  value="1" />
                            <label for="element_21_7" class="choice">Hapusan Darah Tepi</label><br>
                        </div>
                    </td>
                    <td colspan="1" rowspan="3">
                        
                        <div><!-- kimia klinik4-->
        
                            <h2>Kimia Klinik </h2><br>
                            <input type="checkbox"t id="4_1" name="4_1" class="" value="1" />
                            <label class="choice" for="4_1">Glukosa Sewaktu</label><br>
                            <input type="checkbox"t id="4_2" name="4_2" class="" value="1" />
                            <label class="choice" for="4_2">Glukosa Puasa</label><br>
                            <input type="checkbox"t id="4_3" name="4_3" class="" value="1" />
                            <label class="choice" for="4_3">Glukosa 2JPP</label><br>
                            <input type="checkbox"t id="4_4" name="4_4" class="" value="1" />
                            <label class="choice" for="4_4">Cholesterol</label><br>
                            <input type="checkbox"t id="4_5" name="4_5" class="" value="1" />
                            <label class="choice" for="4_5">HDL Cholesterol</label><br>
                            <input type="checkbox"t id="4_6" name="4_6" class="" value="1" />
                            <label class="choice" for="4_6">LDL Cholesterol</label><br>
                            <input type="checkbox"t id="4_7" name="4_7" class="" value="1" />
                            <label class="choice" for="4_7">Trigliserida</label><br>
                            <input type="checkbox"t id="4_8" name="4_8" class="" value="1" />
                            <label class="choice" for="4_8">Mikro albumin</label><br>
                            <input type="checkbox"t id="4_9" name="4_9" class="" value="1" />
                            <label class="choice" for="4_9">Bilirubin Total</label><br>
                            <input type="checkbox" id="4_10" name="4_10"  class="" value="1" />
                            <label class="" for="4_10">Bilirubin Direct</label><br>
                            <input type="checkbox" id="4_11" name="4_11"  class="" value="1" />
                            <label class="" for="4_11">Bilirubin Indiret</label><br>
                            <input type="checkbox" id="4_12" name="4_12"  class="" value="1" />
                            <label class="" for="4_12">HbA1C</label><br>
                            <input type="checkbox" id="4_13" name="4_13"  class="" value="1" />
                            <label class="" for="4_13">SGOT</label><br>
                            <input type="checkbox" id="4_14" name="4_14"  class="" value="1" />
                            <label class="" for="4_14">SGPT</label><br>
                            <input type="checkbox" id="4_15" name="4_15"  class="" value="1" />
                            <label class="" for="4_15">Ureum</label><br>
                            <input type="checkbox" id="4_16" name="4_16"  class="" value="1" />
                            <label class="" for="4_16">Creatinin</label><br>
                            <input type="checkbox" id="4_17" name="4_17"  class="" value="1" />
                            <label class="" for="4_17">Asam Urat</label><br>
                            <input type="checkbox" id="4_18" name="4_18"  class="" value="1" />
                            <label class="" for="4_18">Total Protein</label><br>
                        </div>
                        
                    </td>
                    <td>
                        <div><!-- Pewarnaan5-->
                            <h2>Pewarnaan</h2>
                            <input type="checkbox" id="5_1" name="5_1" class="" value="1" />
                            <label for="5_1" class="" >Gram</label><br>
                            <input type="checkbox" id="5_2" name="5_2" class="" value="1" />
                            <label for="5_2" class="" >Ziehl Nielsen(BTA, Kusta)</label><br>
                            <input type="checkbox" id="5_3" name="5_3" class="" value="1" />
                            <label for="5_3" class="" >GIensa</label><br>
                            <input type="checkbox" id="5_4" name="5_4" class="" value="1" />
                            <label for="5_4" class="" >Filaria</label><br>
                            <input type="checkbox" id="5_5" name="5_5" class="" value="1" />
                            <label for="5_5" class="" >Pembacaan Kroscek</label><br>
                        </div>
                        
                    </td>
                </tr>
                <tr><!-- tr2-->
                    <td>
                        <div><!-- Urinalisa2-->
                            <h2>
                                <label class="" for="2">Urinalisa </label>
                            </h2>
                            <input type="checkbox"  id="2_1" name="2_1" class="" value="1" />
                            <label class="" for="2_1">urin Lengkap</label>
                        </div>
                    </td>
                    <td>
                         <div><!-- Toksikologi6-->
                            <h2>Toksikologi</h2>
                            <input type="checkbox" id="6_1" name="6_1" class=""  value="1" />
                            <label class="" for="6_1">Tes Narkoba(1 Parameter)</label><br>
                        </div>
                    </td>
                   
                </tr>
                <tr><!-- tr3-->
                    <td>
                        <div><!-- immunologi3 -->
                            <h2>
                                Immunologi
                            </h2>
            
                            <input type="checkbox"  id="3_1" name="3_1" class="" value="1" />
                            <label for="3_1" class="" >Widal</label><br>
                            <input type="checkbox"  id="3_2" name="3_2" class="" value="1" />
                            <label for="3_2" class="" >HBsAg</label><br>
                            <input type="checkbox"  id="3_3" name="3_3" class="" value="1" />
                            <label for="3_3" class="" >HIV</label><br>
                            <input type="checkbox"  id="3_4" name="3_4" class="" value="1" />
                            <label for="3_4" class="" >Dengue Test</label><br>
                            <input type="checkbox"  id="3_5" name="3_5" class="" value="1" />
                            <label for="3_5" class="" >Tes Kehamilan</label><br>
                            <input type="checkbox"  id="3_6" name="3_6" class="" value="1" />
                            <label for="3_6" class="" >Malaria Rapid Test</label><br>
                        </div>
                    </td>
                    <td>
                        <div><!-- MIkrobiologi7-->
                            <h2>Mikrobiologi</h2>
                            <input type="checkbox" id="7_1" name="7_1" class="" value="1" />
                            <label class="choice" for="7_1">Jamur (Kerokan Kulit)</label><br>
                            <input type="checkbox" id="7_2" name="7_2" class="" value="1" />
                            <label class="choice" for="7_2">Faeses Lengkap</label><br>
                            <input type="checkbox" id="7_3" name="7_3" class="" value="1" />
                            <label class="choice" for="7_3">Secret Vagina (Uretra)</label><br>
                            
                        </div>
                    </td>
                </tr>  --}}
            </tbody>
        </table>
        				
            <div>   
            <label class="" for="total">Total Harga Pemeriksaan </label>
                <input wire:model.defer="total" id="total" name="total" class="" type="text" maxlength="255" value=""/> 
            </div> 
            
            
            <label class="" for="9">Jam </label>
            <input id="" name="" class="" size="2" type="time" maxlength="2" value=""/><br>
            <input id="" class="" type="submit" name="submit" value="Submit"/>
            
	    </ul>
    </form>
</div>
