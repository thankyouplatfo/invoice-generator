@extends('layouts.dashboard')
@section('breadcrumb')
    عرض المستخدم / {{ $user->name }}
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <div class="w3-row-padding">
        <p class="my-2 w3-right w3-col l6">
            <label class="w3-large" for="name">الإسم</label>
            <input class="name w3-input" name="name" id="name" type="text" value="{{ $user->name }}" readonly>
            @error('name')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="my-2 w3-right w3-col l6">
            <label class="w3-large" for="email">البريد الإلكتروني</label>
            <input class="email w3-input" name="email" id="email" type="text" value="{{ $user->email }}" readonly>
            @error('email')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
    </div>

    <!---->
    <h2 class="mt-5 mb-3" id="user_com">الشركات المرتبطة بهذا المستخدم</h2>
    <ul class="w3-ul">
        @if (count($user->companies) > 0)
            @foreach ($user->companies as $comps)
                <li><a href="{{ route('companies.show', $comps->id) }}">{{ $comps->name }}</a></li>
            @endforeach
        @else
            <li><b class="err">{{ __('site.there_is_no') }}</b></li>
        @endif
    </ul>
@endsection
