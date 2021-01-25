<div>
    <!-- Modal -->
<div wire:ignore.self class="modal modal-xl fade" id="destroyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
                <div class="modal-close-area modal-close-df">
				    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			    </div>
            <div class="modal-body">
            <form>           
                <input type="hidden" wire:model="parameterId">
				<p>Yakin akan menghapus ?</p>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="destroyParameter()" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
       </div>
    </div>
</div>
</div>