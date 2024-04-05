<div>
    <h1>This is test Page</h1>
    <div class="row">
        <form wire:submit="save">
            <div class="col-sm-6 mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input wire:model="name" id="product" type="text" class="form-control" />
            </div>
            <div class="col-sm-6 mb-3">
                <label for="description" class="form-label">Product Desc</label>
                <input wire:model="description" id="description" type="text" class="form-control" />
            </div>
            <input type="submit" value="Send" class="btn btn-primary" />
        </form>
    </div>
</div>
