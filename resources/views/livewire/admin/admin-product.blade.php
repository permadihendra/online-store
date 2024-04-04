@section('title', 'AdminPage - Products - Online Store')

{{-- Create Product Form --}}
<div>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            {{ $form_title }}
        </div>
        <div class="card-body">
            <form>
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
                            {{-- show saved image path, if editMode && $file is true --}}
                            @if ($editMode && $saved_file)
                                <span class="form-text text-primary">saved image : {{ $saved_file }}</span>
                            @endif
                        </div>
                    </div>
                    {{-- @if ($file)
                        <img src="{{ $file->temporaryUrl() }}">
                    @endif --}}

                </div>

            </form>
            @if ($editMode)
                <button wire:click="update({{ $id }})" class="btn btn-primary">Save</button>
                <button wire:click="cancel" class="btn btn-danger">Cancel</button>
            @else
                <button wire:click="store" class="btn btn-primary">Submit</button>
            @endif

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
                            <td>
                                <button id="edit" wire:click="edit({{ $product->id }})" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                    </svg>
                                </button>
                                <button id="delete" wire:confirm="Are you sure to delete this products ?"
                                    wire:click="delete({{ $product->id }})" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                        <path
                                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
