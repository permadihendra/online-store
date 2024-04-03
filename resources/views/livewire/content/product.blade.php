<div>


    @if ($products_name)
        <div class="card mb-3 mx-auto" style="max-width: 30rem;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ '/storage/' . $products_image }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products_name }}</h5>
                        <p class="card-text">{{ $products_desc }}</p>
                        <p class="card-text">IDR {{ $products_price }}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
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
