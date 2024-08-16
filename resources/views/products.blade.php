<!-- Loop through and display products -->
@foreach ($products as $product)
    <p>{{ $product->product_name }}</p>
@endforeach