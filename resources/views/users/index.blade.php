@extends('layouts.dashboard')
@section('breadcrumb')
    المستخدمين <a href="{{ route('users.create') }}" class=" w3-button w3-green w3-large m-3 w3-left"><i
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
                <th class="w3-center">الإسم</th>
                <th class="w3-center">البريد الإلكتروني</th>
                <th class="w3-center">الشركات</th>
                <th class="w3-center">تعديل</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td class="w3-center">{{ $user->id }}</td>
                    <td class="w3-center">
                        <a href="{{ route('users.show', $user->id) }}">
                            {{ $user->name }}
                        </a>
                    </td>
                    <td class="w3-center">{{ $user->email }}</td>
                    <td class="w3-center">
                        <a href="{{ route('users.show', $user->id . '#' . 'user_com') }}"
                            class="w3-bar-item w3-button w3-right-align w3-xlarge w3-orange">
                            <i class="fa-solid fa-building"></i>
                        </a>
                    </td>
                    <!---->
                    <td class="w3-center">
                        <a class="w3-button w3-bar-item w3-yellow" href="{{ route('users.edit', $user->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td class="w3-center">
                        <button class="w3-button w3-bar-item w3-red" type="submit" form="del_user">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <form action="{{ route('users.destroy', $user->id) }}" id="del_user" method="post">@csrf @method('DELETE')
                </form>
            @endforeach
        </table>
    </div>
@endsection
@section('paginate')
    {{ $users->links() }}
@endsection
