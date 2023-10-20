<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users</h1>
    <a href="/components/users/add">Add New user</a>

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
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($courses as $course)
                        @if($course->name != 'admin')
                        <tr>
                            <th>{{ $course->id }}</th>
                            <th>{{ $course->name }}</th>
                            <th>{{ $course->email }}</th>
                            <th>
                                <a type="button" class="btn btn-success" href="/components/users/edit/{{ $course->id }}" target="_blank">Edit</a>
                                <button type="button" class="btn btn-danger" wire:click="delete({{ $course->id }})">Delete</button>
                            </th>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                {{ $courses->links() }}
            </div>
        </div>
    </div>
</div>
