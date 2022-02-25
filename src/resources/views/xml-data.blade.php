@extends('layouts.app')

@section('title', 'Upload XML')

@section('content')
<div>
    <h4>Update Products Data</h4>
    @if (session('error'))
        <div style="color: darkred">{{ session('error') }}</div>
    @endif

    @if ($message = Session::get('success'))
        <div>
            <strong style="color:steelblue">{{ $message }}</strong>
        </div>
    @endif

    <form action="{{ route('xml-upload') }}" method="post">
        @csrf
        <button type="submit" id="submit">Upload XML Data</button>
    </form>
</div>
@endsection

