@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <table>
    @forelse($products as $key => $product)
            <tr>
                <td style="border: 1px solid black; padding: 5px">
                    <a href="{{ route('products.show', ['product' => $product->id]) }}">
                        {{ $product->name }}
                    </a>
                </td>
            </tr>
    @empty
        No products found!
    @endforelse
    </table>
@endsection
