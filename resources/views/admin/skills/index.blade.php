@extends('admin.layouts.master')

@section('main-content')
<main class="content">
    <div class="container-fluid p-0">

        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> New Skill</a>
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Skills List</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Orders</h5>
                    </div>
                    <div class="card-body">
                        <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($skills as $skill)
                                <tr>
                                    <td><strong>#{{ $skill->id }}</strong></td>
                                    <td>{{ $skill->name }}</td>
                                    <td>{{ $skill->category ?? 'Uncategorized' }}</td>
                                    <td>{{ $skill->level ?? 'N/A' }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="skill_active_{{ $skill->id }}" {{ $skill->is_active ? 'checked' : '' }} disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.skills.view', $skill->id) }}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.skills.delete', $skill->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No skills found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection