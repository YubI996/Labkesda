<div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
                <form wire:submit.prevent="storeSampel">
                    <!-- <div class="form-group">
                        <label for="">No Register</label>
                        <input type="text" class="form-control" id=""  placeholder="No Register">
                        <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div> -->
                    <div class="form-group">
                        <label for="">Nama Pelanggan</label>
                        <input wire:model="nama" type="text" class="form-control" id=""  placeholder="Nama Pelanggan">
                        <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea wire:model="alamat" type="text" class="form-control" id=""  placeholder="Alamat"></textarea>
                       <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Pengirim</label>
                        <input wire:model="pengirim" type="text" class="form-control" id=""  placeholder="Pengirim">
                       <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Sampel</label>
                        <input wire:model="jenis_sampel" type="text" class="form-control" id=""  placeholder="Jenis Sampel">
                       <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal dan Jam Sampling</label>
                        <input wire:model="tgl_sampling" type="date" class="form-control" id=""  placeholder="Tanggal dan Jam Sampling">
                       <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal dan Jam Penerimaan</label>
                        <input wire:model="tgl_penerima" type="date" class="form-control" id=""  placeholder="Tanggal dan Jam Sampling">
                       <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Sampel</label>
                        <textarea wire:model="deskripsi_sampel" type="text" class="form-control" id=""  placeholder="Deskripsi Sample"></textarea>
                       <!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
           
        </div>
    </div>
</div>
