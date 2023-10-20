<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Colors</h1>
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
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Primary Color</label>
                            <input type="color" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="color1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Secondary Color</label>
                            <input type="color" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="color2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Section Color</label>
                            <input type="color" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="color3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Footer Color</label>
                            <input type="color" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="color4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Button Color</label>
                            <input type="color" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="color5">
                        </div>
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
