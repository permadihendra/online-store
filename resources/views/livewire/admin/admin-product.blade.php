@section('title', 'AdminPage - Products - Online Store')

{{-- Create Product Form --}}
<div>
    <div class="card mb-4">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danget list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form wire:submit="store">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="name" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name: </label>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input wire:model="name" id="name" type="text" name="name"
                                    value="{{ old('name') }}" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="price" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price: </label>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input wire:model="price" id="price" name="price" type="number"
                                    value="{{ old('price') }}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description :</label>
                    <textarea wire:model="description" name="description" id="description" rows="3" value="{{ old('description') }}"
                        class="form-control"></textarea>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Edit : Delete</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
