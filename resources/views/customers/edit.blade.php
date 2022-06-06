@extends('layouts.dashboard')
@section('breadcrumb')
    تعديل عميل
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <form class="w3-row-padding" action="{{ route('customers.update', $customer->id) }}" method="post">
        @csrf
        @method('put')
        <p class="py-2 w3-col l4 w3-right">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ $customer->name }}" type="text">
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="city">المدينة</label>
            <input class="w3-input city" name="city" id="city" value="{{ $customer->city }}" type="text">
            @error('city')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="district">الحي</label>
            <input class="w3-input district" name="district" id="district" value="{{ $customer->district }}" type="text">
            @error('district')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="science">أقرب علم</label>
            <input class="w3-input science" name="science" id="science" value="{{ $customer->science }}" type="text">
            @error('science')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="phone">رقم الجوال</label>
            <input class="w3-input phone" name="phone" id="phone"
                value="{{ $customer->phone }}" type="text">
            @error('phone')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="tax_number">رقم التعريف الضريبي</label>
            <input class="w3-input tax_number" name="tax_number" id="tax_number" value="{{ $customer->tax_number }}"
                type="text">
            @error('tax_number')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="تعديل عميل">
        </p>
    </form>
@endsection
