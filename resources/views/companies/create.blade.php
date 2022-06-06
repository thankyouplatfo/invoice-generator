@extends('layouts.dashboard')
@section('breadcrumb')
    إنشاء شركة
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>سيكون صاحب هذه الشركة المستخدم / {{ $user->name }}</strong>
    </div>
    <form class="w3-row-padding" action="{{ route('companies.store') }}" method="post">
        @csrf
        <input class="w3-input user_id" name="user_id" id="user_id" value="{{ $user->id }}" type="hidden">
        @error('user_id')
            <b class="err">{{ $message }}</b>
        @enderror
        <p class="py-2 w3-col l4 w3-right">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ old('name') }}" type="text">
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="sub_address">العنوان الفرعي</label>
            <input class="w3-input sub_address" name="sub_address" id="sub_address" value="{{ old('sub_address') }}"
                type="text">
            @error('sub_address')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="city">المدينة</label>
            <input class="w3-input city" name="city" id="city" value="{{ old('city') }}" type="text">
            @error('city')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="district">الحي</label>
            <input class="w3-input district" name="district" id="district" value="{{ old('district') }}" type="text">
            @error('district')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="science">أقرب علم</label>
            <input class="w3-input science" name="science" id="science" value="{{ old('science') }}" type="text">
            @error('science')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l4 w3-right">
            <label for="phone_number_1">رقم التلفيون 1</label>
            <input class="w3-input phone_number_1" name="phone_number_1" id="phone_number_1"
                value="{{ old('phone_number_1') }}" type="text">
            @error('phone_number_1')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l6 w3-right">
            <label for="phone_number_2">رقم التلفون 2</label>
            <input class="w3-input phone_number_2" name="phone_number_2" id="phone_number_2"
                value="{{ old('phone_number_2') }}" type="text">
            @error('phone_number_2')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2 w3-col l6 w3-right">
            <label for="tax_number">رقم التعريف الضريبي</label>
            <input class="w3-input tax_number" name="tax_number" id="tax_number" value="{{ old('tax_number') }}"
                type="text">
            @error('tax_number')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="إنشاء شركة">
        </p>
    </form>
@endsection
