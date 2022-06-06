@extends('layouts.dashboard')
@section('breadcrumb')
    عرض شركة/{{ $company->name }}
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <div class="w3-row-padding">
        <p class="py-2 w3-col l4 w3-right">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ $company->name }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="sub_address">العنوان الفرعي</label>
            <input class="w3-input sub_address" name="sub_address" id="sub_address" value="{{ $company->sub_address }}"
                readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="city">المدينة</label>
            <input class="w3-input city" name="city" id="city" value="{{ $company->city }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="district">الحي</label>
            <input class="w3-input district" name="district" id="district" value="{{ $company->district }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="science">أقرب علم</label>
            <input class="w3-input science" name="science" id="science" value="{{ $company->science }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="phone_number_1">رقم التلفيون 1</label>
            <input class="w3-input phone_number_1" name="phone_number_1" id="phone_number_1"
                value="{{ $company->phone_number_1 }}" readonly>
        </p>
        <p class="py-2 w3-col l6 w3-right">
            <label for="phone_number_2">رقم التلفون 2</label>
            <input class="w3-input phone_number_2" name="phone_number_2" id="phone_number_2"
                value="{{ $company->phone_number_2 }}" readonly>
        </p>
        <p class="py-2 w3-col l6 w3-right">
            <label for="tax_number">رقم التعريف الضريبي</label>
            <input class="w3-input tax_number" name="tax_number" id="tax_number" value="{{ $company->tax_number }}"
                readonly>
        </p>
    </div>
    <h2 class="mt-5 mb-3">الفواتير المرتبطة بهذه الشركة </h2>
    <h2 class="mt-5 mb-3" id="company_categories">المنتجات المرتبطة بهذه الشركة </h2>
    <ul class="w3-ul">
        @foreach ($company->categories as $cat)
            <li><a href="{{ route('categories.show', $cat->id) }}">{{ $cat->name }}</a></li>
        @endforeach
    </ul>
@endsection