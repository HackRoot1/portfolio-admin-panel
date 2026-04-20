@extends('admin.layouts.master')

@section('main-content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Add New Skill</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Skill Details:</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.skills.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="icon">Icon</label>
                                    <input class="form-control" name="icon" id="icon" accept=".png, .jpg, .jpeg, .webp" type="file">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name">Skill Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Skill Name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="category">Category Name</label>
                                    <input type="text" class="form-control" id="category" placeholder="Category Name" name="category" value="{{ old('category') }}">
                                    @error('category')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="icon_class">Icon Class</label>
                                    <input type="text" class="form-control" id="icon_class" name="icon_class"
                                        placeholder="e.g. fab fa-facebook" value="{{ old('icon_class') }}">
                                    <small class="form-text text-muted">Use FontAwesome or Feather icon class.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="icon_color">Icon Color</label>
                                    <input type="text" class="form-control" id="icon_color" name="icon_color"
                                        placeholder="e.g. #3b5998" value="{{ old('icon_color') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="level">Level</label>
                                    <input type="text" class="form-control" id="level" placeholder="Level (e.g., Beginner, Intermediate, Advanced)" name="level" value="{{ old('level') }}">
                                    @error('level')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="sort_order">Sort Order</label>
                                    <input type="number" class="form-control" id="sort_order" placeholder="Sort Order" name="sort_order" value="{{ old('sort_order') }}">
                                    @error('sort_order')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="status">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option selected>--Select--</option>
                                        <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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