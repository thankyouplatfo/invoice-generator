@extends('layouts.dashboard')
@section('breadcrumb')
    العملاء <a href="{{ route('customers.create') }}" class=" w3-button w3-green w3-large m-3 w3-left"><i
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
                <th class="w3-center">المدينة</th>
                <th class="w3-center">الحي </th>
                <th class="w3-center">علم</th>
                <th class="w3-center">رقم الجوال</th>
                <th class="w3-center">الرقم الضريبي</th>
                <th class="w3-center">تعديل</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($customers as $customer)
                <tr>
                    <td class="w3-center">{{ $customer->id }}</td>
                    <td class="w3-center"><a
                            href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a></td>
                    <td class="w3-center">{{ $customer->city }}</td>
                    <td class="w3-center">{{ $customer->district }}</td>
                    <td class="w3-center">{{ $customer->science }}</td>
                    <td class="w3-center">{{ $customer->phone }}</td>
                    <td class="w3-center">{{ $customer->tax_number }}</td>
                    <!---->
                    <td class="w3-center"><a class="w3-button w3-bar-item w3-yellow"
                            href="{{ route('customers.edit', $customer->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="w3-center"><button class="w3-button w3-bar-item w3-red" type="submit"
                            form="del_customer"><i class="fa-solid fa-trash"></i></a></button></td>
                </tr>
                <form action="{{ route('customers.destroy', $customer->id) }}" id="del_customer" method="post">@csrf
                    @method('DELETE')
                </form>
            @endforeach
        </table>
    </div>
@endsection
@section('paginate')
    {{ $customers->links() }}
@endsection
