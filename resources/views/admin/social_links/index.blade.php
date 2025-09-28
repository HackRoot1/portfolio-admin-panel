@extends('admin.layouts.master')

@section('main-content')
    <main class="content">
        <div class="container-fluid p-0">

            <a href="{{ route('admin.social_links.create') }}" class="btn btn-primary float-end mt-n1"><i
                    class="fas fa-plus"></i> New Social Link</a>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Social Links List</h1>
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
                            <h5 class="card-title mb-0">Social Links</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Platform Name</th>
                                        <th>URL</th>
                                        <th>Icon/Class</th>
                                        <th>Icon Color</th>
                                        <th>Added Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($socialLinks as $key => $link)
                                        <tr>
                                            <td><strong>{{ $key + 1 }}</strong></td>
                                            <td>{{ $link->platform_name }}</td>
                                            <td>{{ $link->url }}</td>
                                            <td>{{ $link->icon_class }}</td>
                                            <td>{{ $link->icon_color }}</td>
                                            <td>{{ $link->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" checked type="checkbox" id="view_admin">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.social_links.edit', $link->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('admin.social_links.delete', $link->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No social links found.</td>
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
