<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Header</h1>
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
                    <div class="custom-control custom-switch" style="float: left;">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" wire:model.dafer="status">
                        <label class="custom-control-label" for="customSwitch1">Enable / Disable </label>
                    </div>
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
                            <label for="exampleFormControlInput1" class="form-label">Address Ar</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Address Ar" wire:model.dafer="address_ar">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Address En</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Address En" wire:model.dafer="address_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" wire:model.dafer="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Link facebook</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email facebook" wire:model.dafer="facebook">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Link twitter</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email twitter" wire:model.dafer="twitter">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Link instagram</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email instagram" wire:model.dafer="instagram">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Link youtube</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" wire:model.dafer="youtube">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Link whatsapp</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email whatsapp" wire:model.dafer="whatsapp">
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
