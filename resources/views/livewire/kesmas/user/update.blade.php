<div>
    <!-- Modal -->
<div wire:ignore.self class="modal modal-xl fade" id="userUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
                <div class="modal-close-area modal-close-df">
				    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			    </div>
                <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="userId"> 
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" wire:model="name"  placeholder="Nama petugas">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Email</label>
                        <input type="text" class="form-control" wire:model="email"  placeholder="Email">
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Username</label>
                        <input type="text" class="form-control" wire:model="username"  placeholder="Username">
                        @error('username') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2" class="form-label">Role</label>
						<select wire:model="role" id="2" class="form-control" required>
                        	<option >Silahkan Pilih Role</option>
                        	<option value="pendaftaran">Pendaftaran</option>
                        	<option value="sampling">Sampling</option>
                        	<option value="perawat">Perawat</option>
                        	<option value="analis">analis</option>
                        	<option value="verifikator">verifikator</option>
                        </select>
                        @error('role') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="updateUser()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>
</div>