@extends('layouts.dashboard')
@section('breadcrumb')
    المنتجات <a href="{{ route('products.create') }}" class=" w3-button w3-green w3-large m-3 w3-left"><i
            class="fas fa-plus w3-xlarge"></i></a>
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif

    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الإسم </th>
                <th class="w3-center">السعر</th>
                <th class="w3-center">قيمة الضريبة</th>
                <th class="w3-center">الصافي الإجمالي</th>
                <th class="w3-center">الأصناف</th>
                <th class="w3-center">تعديل</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td class="w3-center">{{ $product->id }}</td>
                    <td class="w3-center"><a
                            href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                    <td class="w3-center">{{ $product->price }}</td>
                    <td class="w3-center">{{ $product->tax_value }}</td>
                    <td class="w3-center">{{ $product->net_total }}</td>
                    <td class="w3-center">
                        <a href="{{ route('products.show', $product->id . '#' . 'product_categories') }}"
                            class="w3-button w3-indigo">
                            <i class="fa-solid fa-boxes-stacked share-alt "></i>
                        </a>
                    </td>
                    </td>
                    <!---->
                    <td class="w3-center"><a class="w3-button w3-bar-item w3-yellow"
                            href="{{ route('products.edit', $product->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="w3-center"><button class="w3-button w3-bar-item w3-red" type="submit"
                            form="del_customer"><i class="fa-solid fa-trash"></i></a></button></td>
                </tr>
                <form action="{{ route('products.destroy', $product->id) }}" id="del_customer" method="post">@csrf
                    @method('DELETE')
                </form>
            @endforeach
        </table>
    </div>
@endsection
@section('paginate')
    {{ $products->links() }}
@endsection
