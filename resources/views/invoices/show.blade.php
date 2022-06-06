@extends('layouts.dashboard')
@section('breadcrumb')
    عرض  العميل/{{ $customer->name }}
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
            <input class="w3-input name" name="name" id="name" value="{{ $customer->name }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="city">المدينة</label>
            <input class="w3-input city" name="city" id="city" value="{{ $customer->city }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="district">الحي</label>
            <input class="w3-input district" name="district" id="district" value="{{ $customer->district }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="science">أقرب علم</label>
            <input class="w3-input science" name="science" id="science" value="{{ $customer->science }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="phone">رقم الجوال </label>
            <input class="w3-input phone" name="phone" id="phone" value="{{ $customer->phone }}" readonly>
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="tax_number">رقم التعريف الضريبي</label>
            <input class="w3-input tax_number" name="tax_number" id="tax_number" value="{{ $customer->tax_number }}"
                readonly>
        </p>
    </div>
    <h2 class="mt-5 mb-3">الفواتير المرتبطة بهذا العميل  </h2>
@endsection
