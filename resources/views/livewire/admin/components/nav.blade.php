<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Nav</h1>
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
                            <label for="exampleFormControlInput1" class="form-label">Title Ar</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Title En</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Sub Title Ar</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Sub Title Ar" wire:model.dafer="sub_title_ar">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Sub Title En</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Sub Title En" wire:model.dafer="sub_title_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Logo</label>
                        <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Logo" wire:model.dafer="img">
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Menu</label>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="menu_1_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="menu_1_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="menu_2_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="menu_2_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="menu_3_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="menu_3_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="menu_4_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="menu_4_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="menu_5_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="menu_5_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="menu_6_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="menu_6_en">
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
