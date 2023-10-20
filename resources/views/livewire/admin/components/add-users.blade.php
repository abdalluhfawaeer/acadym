<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Clint</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="alert alert-dark" role="alert" wire:loading>
        Processing updated...
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-100">
                <div class="card-header py-3">
                    <div class="custom-control custom-switch" style="float: right;">
                        <button href="login.html" class="btn btn-primary btn-user btn-block" wire:click="save" wire:loading.attr="disabled">
                            <span wire:loading.remove wire.target="save">Save</span>
                            <span wire:loading wire.target="save" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" wire:model.dafer="username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email" wire:model.dafer="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Password" wire:model.dafer="password" required>
                    </div>
                    <button href="login.html" class="btn btn-primary btn-user btn-block" wire:click="save" wire:loading.attr="disabled">
                        <span wire:loading.remove wire.target="save">Save</span>
                        <span wire:loading wire.target="save" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
