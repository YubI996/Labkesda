<div>
    <!-- Modal -->
<div wire:ignore.self class="modal modal-xl fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
                <div class="modal-close-area modal-close-df">
				    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			    </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="parameterId">
                        <label for="exampleFormControlInput1">Nama Parameter</label>
                        <input type="text" class="form-control" wire:model="nama"  placeholder="Nama Parameter">
                        @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
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
                        @error('jenis') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Harga</label>
                        <input type="text" class="form-control" wire:model="harga"  placeholder="Harga">
                        @error('harga') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="updateParameter()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>
</div>