@extends('layouts.dashboard')
@section('breadcrumb')
    صفحة ربط الأصناف بالشركات
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <form class="w3-row-padding" action="{{ route('companyCategory.store') }}" method="post">
        @csrf
        <p class="w3-col  py-2 w3-right">
            <label for="company_id">اسم الشركة</label>
            <select class="w3-input company_id" name="company_id" id="company_id" >
                @foreach ($companies as $com)
                    <option value="{{ $com->id }}">{{ $com->name }}</option>
                @endforeach
            </select>
            @error('company_id')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col  py-2 w3-right">
            <label for="category_id">الأصناف</label>
            <select class="w3-input category_id" name="category_id[]" id="category_id" multiple>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="ربط">
        </p>
    </form>
@endsection
