<div>


    @if ($products_name)
        <div class="card mb-3 mx-auto" style="max-width: 30rem;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ '/storage/' . $products_image }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products_name }} (${{ $products_price }})</h5>
                        <p class="card-text">{{ $products_desc }}</p>
                        <p class="card-text">
                        <form action="" wire:submit="addToCart({{ $products_id }})">
                            <div class="row">
                                @csrf
                                <div class="col-auto">
                                    <div class="input-group col-auto">
                                        <div class="input-group-text">Quantity</div>
                                        <input wire:model="product_quantity" type="number" min="1"
                                            max="10" class="form-control quantity-input" name="quantity"
                                            value="1">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn bg-primary text-white" type="submit">Add to cart</button>
                                </div>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row">


        @foreach ($products_data as $product)
            <div wire:key="{{ $product->id }}" class="card mx-3 col-sm-5 col-lg-2 mb-5">

                <img src="{{ asset('/storage/' . $product->image_path) }}" class="card-img-top">
                <div class="card-body text-center">

                    <button type="button" wire:click="showDetail({{ $product->id }})" href=""
                        class="btn bg-primary text-white">
                        {{ $product->name }}

                    </button>
                </div>


            </div>
        @endforeach
    </div>
</div>
