@extends('layouts.dashboard')
@section('breadcrumb')
    تعديل مستخدم
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('put')
        @csrf
        <p class="my-2">
            <label class="w3-large" for="name">الإسم</label>
            <input class="name w3-input" name="name" id="name" type="text" value="{{ $user->name }}">
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="my-2">
            <label class="w3-large" for="email">البريد الإلكتروني</label>
            <input class="email w3-input" name="email" id="email" type="text" value="{{ $user->email }}">
            @error('email')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="my-2">
            <label class="w3-large" for="password">كلمة المرور</label>
            <input class="password w3-input" name="password" id="password" type="text">
            @error('password')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="my-2">
            <label class="w3-large" for="password_confirmation">تأكيد كلمة المرور</label>
            <input class="password_confirmation w3-input" name="password_confirmation" id="password_confirmation"
                type="text">
        </p>
        <p class="my-3">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="تعديل مستخدم">
        </p>
    </form>
@endsection
