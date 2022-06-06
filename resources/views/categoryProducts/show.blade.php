@extends('layouts.dashboard')
@section('breadcrumb')
    عرض  تصنيف/{{ $category->name }}
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <div class="w3-row-padding">
        <p class="py-2">
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" value="{{ $category->name }}" readonly>
        </p>
    </div>
    <h2 class="mt-5 mb-3">المنتجات المرتبطة بهذا التصنيف  </h2>
@endsection
