@extends('layouts.dashboard')
@section('breadcrumb')
    {{ $title }}
@endsection

@section('content')
    <div class="w3-row-padding">
        <div class="w3-col l4 w3-right mb-3">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class="fa-solid fa-users comment w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h2>{{ $users }}</h2>
                </div>
                <div class="w3-clear"></div>
                <a href="{{ route('users.index') }}" class="w3-bar-item w3-hover-text-white w3-right">
                    <h4>المستخدمين</h4>
                </a>
            </div>
        </div>
        <div class="w3-col l4 w3-right mb-3">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa-solid fa-building comment w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h2>{{ $companies }}</h2>
                </div>
                <div class="w3-clear"></div>
                <a href="{{ route('companies.index') }}" class="w3-bar-item w3-hover-text-white w3-right">
                    <h4>شركات</h4>
                </a>
            </div>
        </div>
        <div class="w3-col l4 w3-right mb-3">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa-solid fa-puzzle-piece eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h2>{{ $categories }}</h2>
                </div>
                <div class="w3-clear"></div>
                <a href="{{ route('categories.index') }}" class="w3-bar-item w3-hover-text-white w3-right">
                    <h4>التصنيفات</h4>
                </a>
            </div>
        </div>
        <div class="w3-col l4 w3-right mb-3">
            <div class="w3-container w3-indigo w3-padding-16">
                <div class="w3-left"><i class="fa-solid fa-boxes-stacked share-alt w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h2>{{ $products }}</h2>
                </div>
                <div class="w3-clear"></div>
                <a href="{{ route('products.index') }}" class="w3-bar-item w3-hover-text-white w3-right">
                    <h4>منتجات</h4>
                </a>
            </div>
        </div>
        <div class="w3-col l4 w3-right mb-3">
            <div class="w3-container w3-green w3-padding-16">
                <div class="w3-left"><i class="fa-solid fa-users eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h2>{{ $customers }}</h2>
                </div>
                <div class="w3-clear"></div>
                <a href="{{ route('customers.index') }}" class="w3-bar-item w3-hover-text-white w3-right">
                    <h4>عملاء</h4>
                </a>
            </div>
        </div>
        <div class="w3-col l4 w3-right mb-3">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa-solid fa-money-bill share-alt w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h2>{{ $invoices }}</h2>
                </div>
                <div class="w3-clear"></div>
                <a href="{{ route('invoices.index') }}" class="w3-bar-item w3-hover-text-white w3-right">
                    <h4>الفواتير</h4>
                </a>
            </div>
        </div>
    </div>
@endsection
