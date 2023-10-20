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
                    <div class="custom-control custom-switch" style="float: left;">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" wire:model.dafer="status">
                        <label class="custom-control-label" for="customSwitch1">Enable / Disable </label>
                    </div>
                    <div class="custom-control custom-switch" style="float: right;">
                        <a href="/components/courses/add">Add New Course</a>
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
                    <button href="login.html" class="btn btn-primary btn-user btn-block" wire:click="save" wire:loading.attr="disabled">
                        <span wire:loading.remove wire.target="save">Save</span>
                        <span wire:loading wire.target="save" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-100">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title ar</th>
                        <th scope="col">Title en</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <th>{{ $course->id }}</th>
                            <th>{{ $course->title_ar }}</th>
                            <th>{{ $course->title_en }}</th>
                            <th>
                                <a type="button" class="btn btn-success" href="/components/courses/edit/{{ $course->id }}" target="_blank">Edit</a>
                                <button type="button" class="btn btn-danger" wire:click="delete({{ $course->id }})">Delete</button>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $courses->links() }}
            </div>
        </div>
    </div>
</div>
