<div>
    {{-- Cart Purchase View --}}

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('statusNotLoggin'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('statusNotLoggin') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


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
                    @if ($productsInCart)
                        @foreach ($productsInCart as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ session('products')[$product->id] }}</td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>

            <div class="row">
                <div class="text-end">
                    <a href="" class="btn btn-outline-secondary mb-2"><b>Total to pay:
                            ${{ $total }}</b></a>
                    @if (count($productsInCart) > 0)
                        <a wire:click="cartPurchase" wire:confirm="Are you sure want to purchase this items ?"
                            class="btn bg-primary text-white mb-2">Purchase</a>

                        <button wire:click="cartDelete" wire:confirm="Are you sure want to clear the cart ?"
                            class="btn btn-danger mb-2">Clear Cart</button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
