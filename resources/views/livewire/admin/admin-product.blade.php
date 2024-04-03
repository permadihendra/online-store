@section('title', 'AdminPage - Products - Online Store')

{{-- Create Product Form --}}
<div>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body">
            <form wire:submit="store">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="name" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name: </label>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input wire:model="name" id="name" type="text" name="name"
                                    value="{{ old('name') }}" class="form-control" />
                                @error('name')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="price" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price: </label>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input wire:model="price" id="price" name="price" type="number"
                                    value="{{ old('price') }}" class="form-control" />
                                @error('price')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description :</label>
                    <textarea wire:model="description" name="description" id="description" rows="3" value="{{ old('description') }}"
                        class="form-control"></textarea>
                    @error('description')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="image" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image :</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input wire:model="file" name="image" type="file" class="form-control" />
                                @error('file')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    @if ($file)
                        <img src="{{ $file->temporaryUrl() }}">
                    @endif

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->image_path }}</td>
                            <td>Edit : Delete</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
