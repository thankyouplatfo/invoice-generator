@extends('layouts.dashboard')
@section('breadcrumb')
    التصنيفات <a href="{{ route('categories.create') }}" class=" w3-button w3-green w3-large m-3 w3-left"><i
            class="fas fa-plus w3-xlarge"></i></a>
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    {{-- <dl class="w3-row-padding w3-ul">
        @foreach ($categories as $cats)
            <li class="w3-col l4 w3-right" style="min-height: 200px;overflow:auto">
                <dt>
                    <h3>{{ $cats->name }}</h3>
                </dt>
                @foreach ($cats->products as $pro)
                    <dd>{{ $pro->name }}</dd>
                @endforeach
            </li>
        @endforeach
    </dl> --}}

    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الإسم </th>
                <th class="w3-center">المنتجات</th>
                <th class="w3-center">تعديل</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td class="w3-center">{{ $category->id }}</td>
                    <td class="w3-center"><a
                            href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></td>
                    <td class="w3-center">
                        <a href="{{ route('categoryProducts', $category->id) }}" class="w3-button w3-bar-item"><i
                                class="fa-solid fa-boxes-stacked share-alt "></i></a>
                    </td>
                    <!---->
                    <td class="w3-center"><a class="w3-button w3-bar-item w3-yellow"
                            href="{{ route('categories.edit', $category->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="w3-center"><button class="w3-button w3-bar-item w3-red" type="submit"
                            form="del_customer"><i class="fa-solid fa-trash"></i></a></button></td>
                </tr>
                <form action="{{ route('categories.destroy', $category->id) }}" id="del_customer" method="post">@csrf
                    @method('DELETE')
                </form>
            @endforeach
        </table>
    </div>
@endsection
@section('paginate')
    {{ $categories->links() }}
@endsection
