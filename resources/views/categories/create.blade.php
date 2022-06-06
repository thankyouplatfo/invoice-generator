@extends('layouts.dashboard')
@section('breadcrumb')
    إنشاء تصنيف
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <form class="w3-row-padding" action="{{ route('categories.store') }}" method="post">
        @csrf
        {{-- <p class="py-2 w3-hide">
            <label for="company_id">الشركات</label>
            <select class="w3-input company_id" name="company_id[]" id="company_id" multiple form="category_companies">
                @foreach ($companies as $com)
                    <option value="{{ $com->id }}">{{ $com->name }}</option>
                @endforeach
            </select>
            @error('company_id')
                <b class="err">{{ $message }}</b>
            @enderror
        </p> --}}
        <p class="py-2">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ Str::random(10) }}" type="text">
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="py-2">
            <label for="productsIds">المنتجات</label>
            <select class="w3-input productsIds" name="productsIds[]" id="productsIds" multiple>
                @foreach ($products as $proud)
                    <option value="{{ $proud->id }}">{{ $proud->name }}</option>
                @endforeach
            </select>
            @error('productsIds')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="إنشاء تصنيف">
        </p>
    </form>
@endsection
