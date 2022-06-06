@extends('layouts.dashboard')
@section('breadcrumb')
    إنشاء منتج
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif

    <form class="w3-row-padding" action="{{ route('products.store') }}" method="post">
        @csrf
        <p class="w3-col l3 py-2 w3-right">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ old('name') }}" type="text">
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l3 py-2 w3-right">
            <label for="price">السعر</label>
            <input class="w3-input price" name="price" id="price" value="{{ old('price') }}" type="number">
            @error('price')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l3 py-2 w3-right">
            <label for="tax_value">قيمة الضريبة</label>
            <input class="w3-input tax_value" name="tax_value" id="tax_value" value="{{ old('tax_value') }}"
                type="number">
            @error('tax_value')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l3 py-2 w3-right">
            <label for="net_total">الإجمالي الصافي</label>
            <input class="w3-input net_total" name="net_total" id="net_total" value="{{ old('net_total') }}"
                type="number">
            @error('net_total')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="إنشاء منتج">
        </p>
    </form>
@endsection
