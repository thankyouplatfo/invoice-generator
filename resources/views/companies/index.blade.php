@extends('layouts.dashboard')
@section('breadcrumb')
    الشركات <a href="{{ route('companies.create') }}" class=" w3-button w3-green w3-large m-3 w3-left"><i
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
                <th class="w3-center">عنوان فرعي</th>
                <th class="w3-center">المدينة</th>
                <th class="w3-center">الحي </th>
                <th class="w3-center">علم</th>
                <th class="w3-center">رقم التيلفون 1</th>
                <th class="w3-center">رقم التيلفون 2</th>
                <th class="w3-center">الرقم الضريبي</th>
                <th class="w3-center">التصنيفات</th>
                <th class="w3-center">المستخدم</th>
                <th class="w3-center">تعديل</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($companies as $company)
                <tr>
                    <td class="w3-center">{{ $company->id }}</td>
                    <td class="w3-center">
                        <a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}
                        </a>
                    </td>
                    <td class="w3-center">{{ $company->sub_address }}</td>
                    <td class="w3-center">{{ $company->city }}</td>
                    <td class="w3-center">{{ $company->district }}</td>
                    <td class="w3-center">{{ $company->science }}</td>
                    <td class="w3-center">{{ $company->phone_number_1 }}</td>
                    <td class="w3-center">{{ $company->phone_number_2 }}</td>
                    <td class="w3-center">{{ $company->tax_number }}</td>
                    <td class="w3-center">
                        <a href="{{ route('companies.show', $company->id . '#' . 'company_categories') }}"
                            class="w3-button w3-bar-item w3-blue">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('users.show', $company->user->id) }}">{{ $company->user->name }}
                        </a>
                    </td>
                    <!---->
                    <td class="w3-center">
                        <a class="w3-button w3-bar-item w3-yellow" href="{{ route('companies.edit', $company->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td class="w3-center"><button class="w3-button w3-bar-item w3-red" type="submit"
                            form="del_company"><i class="fa-solid fa-trash"></i></a></button></td>
                </tr>
                <form action="{{ route('companies.destroy', $company->id) }}" id="del_company" method="post">@csrf
                    @method('DELETE')
                </form>
            @endforeach
        </table>
    </div>
@endsection
@section('paginate')
    {{ $companies->links() }}
@endsection
