<div class="card">
    <div class="card-header">
        Products in Carts
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productsInCart as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ session('products')[$product->id] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="row">
            <div class="text-end">
                <a href="" class="btn btn-outline-secondary mb-2"><b>Total to pay: ${{ $total }}</b></a>
                <a href="" class="btn bg-primary text-white mb-2">Purchase</a>

                <button wire:click="cartDelete" wire:confirm="Are you sure want to clear the cart ?"
                    class="btn btn-danger mb-2">Clear Cart</button>

            </div>
        </div>
    </div>
</div>
