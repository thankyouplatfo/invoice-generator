@extends('layouts.dashboard')
@section('breadcrumb')
    عرض المنتج/{{ $product->name }}
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <div class="w3-row-padding">
        <p class="w3-col l3 py-2 w3-right">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ $product->name }}" type="text" readonly>
        </p>
        <p class="w3-col l3 py-2 w3-right">
            <label for="price">السعر</label>
            <input class="w3-input price" name="price" id="price" value="{{ $product->price }}" type="text" readonly
               >
        </p>
        <p class="w3-col l3 py-2 w3-right">
            <label for="tax_value">قيمة الضريبة</label>
            <input class="w3-input tax_value" name="tax_value" id="tax_value" value="{{ $product->tax_value }}" type="text"
                readonly>
        </p>
        <p class="w3-col l3 py-2 w3-right">
            <label for="net_total">الإجمالي الصافي</label>
            <input class="w3-input net_total" name="net_total" id="net_total" value="{{ $product->net_total }}"
                type="text" readonly>
        </p>
    </div>
    <h2 class="mt-5 mb-3" id="product_categories">الأصناف المرتبطة بهذا المنتج </h2>
    <ul class="w3-ul">
        @foreach ($product->categories as $cat)
            <li>
                <a href="{{ route('categories.show',$cat->id) }}">{{ $cat->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
