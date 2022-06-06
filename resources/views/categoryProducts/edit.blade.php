@extends('layouts.dashboard')
@section('breadcrumb')
    تعديل تصنيف
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <form class="w3-row-padding" action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('put')
        <p class="py-2">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ $category->name }}" type="text">
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="تعديل تصنيف">
        </p>
    </form>
@endsection
