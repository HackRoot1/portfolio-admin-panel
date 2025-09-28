@extends('admin.layouts.master')

@section('main-content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Add New Social Link</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Staff Details:</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.social_links.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Platform Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="e.g. Facebook" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="url">URL</label>
                                    <input type="url" class="form-control" id="url" name="url"
                                        placeholder="https://facebook.com/yourprofile" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="icon">Icon Class</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="e.g. fab fa-facebook">
                                    <small class="form-text text-muted">Use FontAwesome or Feather icon class.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="icon_color">Icon Color</label>
                                    <input type="text" class="form-control" id="icon_color" name="icon_color"
                                        placeholder="e.g. #3b5998">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
