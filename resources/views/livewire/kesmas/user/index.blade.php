<div>
@include('livewire.kesmas.user.create')
@include('livewire.kesmas.user.update')
@include('livewire.kesmas.user.delete-confirmation')
    <h4>Manajemen User</h4>
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createUserModal">Create</button>
            </div>
            <div class="col-md-6">
            <input type="text"class="form-control" placeholder="Search...">
            </div>
            <div class="sparkline13-graph">
	            <div class="datatable-dashv1-list custom-datatable-overright">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($user as $index=>$data)
                            <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->role}}</td>
                            <td>
                                <button data-toggle="modal" data-target="#userUpdateModal" wire:click="editUser({{ $data->id }})" class="btn btn-warning btn-md">Edit</button>
                                <button data-toggle="modal" data-target="#userDestroyModal" wire:click="destroyModalUser({{ $data->id }})" class="btn btn-danger btn-md">Delete</button>
                            </td>
                            </tr>
                        @empty
                        <tr>
                            <center>
                                <td collspan="6">Data Not Found</td>
                            </center>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
