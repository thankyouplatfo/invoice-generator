@extends('layouts.dashboard')
@section('breadcrumb')
    عرض التصنيف/{{ $category->name }}
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
    <h2 class="mt-5 mb-3" id="category_companies">الشركات المرتبطة بهذه التصنيف </h2>
    <ul class="w3-ul">
        @foreach ($category->companies as $com)
            <li><a href="{{ route('companies.show', $com->id) }}">{{ $com->name }}</a></li>
        @endforeach
    </ul>
    <h2 class="mt-5 mb-3" id="category_products">المنتجات المرتبطة بهذا التصنيف </h2>
    <ul class="w3-ul">
        @foreach ($category->products as $prod)
            <li><a href="{{ route('products.show',$prod->id) }}">{{ $prod->name }}</a></li>
        @endforeach
    </ul>
@endsection
