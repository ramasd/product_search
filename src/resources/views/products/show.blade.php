@extends('.layouts.app')

@section('title', $product->name)

@section('content')
    <div>
        <p>{{ $product->category_id }}</p>
    </div>
    <div>
        <img src="{{URL::asset("$product->image")}}" alt="profile Pic" height="222" style="float: left">
        <h2>{{ $product->name }}</h2>
        <p>Kaina: {{ $product->price }}</p>
        <p>Akcija: {{ $product->on_sale ? 'Taip' : 'Ne' }}</p>
        <p>Mėnesinė kaina: {{ $product->monthly_price }}</p>
        <p>Speciali mėnesinė kaina: {{ $product->monthly_special_price }}</p>
    </div>
@endsection
