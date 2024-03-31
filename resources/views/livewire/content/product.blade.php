<div class="row">
    @foreach ($products_data as $product)
        <div class="col-sm-5 col-lg-3 mb-2">
            <div class="card  mx-auto">
                <img src="{{ asset('/img/' . $product['image']) }}" class="card-img-top">
                <div class="card-body text-center">
                    Text Default
                </div>
                <a href="" class="btn bg-primary text-white">{{ $product['name'] }}</a>
            </div>
        </div>
    @endforeach
</div>
