<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Courses</h1>
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
                    <label for="exampleFormControlInput1" class="form-label">Image 1</label>
                    <img src="{{method_exists($this->image1, 'temporaryUrl') ? $this->image1->temporaryUrl() : asset("storage/". $this->image1)}}" style="width: 100%;height: 650px;">
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Logo" wire:model.dafer="image1">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Title Ar" wire:model.dafer="title_ar">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Title En" wire:model.dafer="title_en">
                        </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="desc_ar">AR</textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.dafer="desc_en">EN</textarea>
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
