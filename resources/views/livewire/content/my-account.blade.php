<div>

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

    @forelse($ordersData as $order)
        <div class="card mb-4">
            <div class="card-header">Order #{{ $order->id }}</div>
            <div class="card-body">
                <b>Date :</b> {{ $order->created_at }} <br />
                <b>Total :</b> {{ $order->total }} <br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Item ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    @empty
        <div class="alert alert-danger" role="alert">
            Seems to be that you have not purchased anything yet.
        </div>
    @endforelse
</div>
