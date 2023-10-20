<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Goals</h1>
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
                            <label for="exampleFormControlInput1" class="form-label">Title Ar 1</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar 1" wire:model.dafer="title_ar">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Title En 1</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En 1" wire:model.dafer="title_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="desc_ar">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="desc_en">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Title Ar 2</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar 1" wire:model.dafer="title_ar1">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Title En 2</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En 1" wire:model.dafer="title_en1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="desc_ar1">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="desc_en1">EN</textarea>
                        </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Goals</label>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Title Ar 1</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar 1" wire:model.dafer="title_ar_g">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Title En 1</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En 1" wire:model.dafer="title_en_g">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_1">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_1">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_2">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_2">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_3">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_3">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_4">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_4">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_5">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_5">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_6">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_6">EN</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_ar_7">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="goal_en_7">EN</textarea>
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
