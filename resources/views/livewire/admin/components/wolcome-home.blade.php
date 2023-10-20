<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Welcome Home</h1>
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
                    <center>
                        <div class="img">
                            <img src="{{method_exists($this->image1, 'temporaryUrl') ? $this->image1->temporaryUrl() : asset("storage/". $this->image1)}}" style="width: 128px;height: 128px;" >
                            <img src="{{method_exists($this->image2, 'temporaryUrl') ? $this->image2->temporaryUrl() : asset("storage/". $this->image2)}}" style="width: 128px;height: 128px;">
                            <img src="{{method_exists($this->image3, 'temporaryUrl') ? $this->image3->temporaryUrl() : asset("storage/". $this->image3)}}" style="width: 128px;height: 128px;">
                            <img src="{{method_exists($this->image4, 'temporaryUrl') ? $this->image4->temporaryUrl() : asset("storage/". $this->image4)}}" style="width: 128px;height: 128px;">
                        </div>
                    </center>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlInput1" class="form-label">Title Ar</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar_main">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Title En</label>
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en_main">
                        </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Image 1</label>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Logo" wire:model.dafer="image1">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar1">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en1">
                        </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Image 2</label>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Logo" wire:model.dafer="image2">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar2">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en2">
                        </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Image 3</label>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Logo" wire:model.dafer="image3">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar3">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en3">
                        </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Image 4</label>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Logo" wire:model.dafer="image4">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar4">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en4">
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
