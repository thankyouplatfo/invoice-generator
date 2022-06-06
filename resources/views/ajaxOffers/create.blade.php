@extends('layouts.dashboard')
@section('breadcrumb')
    إنشاء عروض
@endsection
@section('content')
    {{-- @if (Session::has('msg')) --}}
        <div class="alert alert-success alert-dismissible fade show w3-hide" role="alert" id="success">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ __('site.msg_c            ') }}</strong>
        </div>
    {{-- @endif --}}
    <div class="w3-content">
        <form id="offerForm" {{-- method="POST" action="{{ route('ajaxOffers.store') }}" enctype="multipart/form-data" --}}>
            @csrf
            <p>
                <label for="image">الصورة</label>
                <input type="file" class="image w3-input" name="image" id="image" value="{{ old('image') }}"
                    accept="image/png">
                @error('image')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p>
                <label for="name">الإسم </label>
                <input type="text" class="name w3-input" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p>
                <label for="price">السعر </label>
                <input type="number" class="price w3-input" name="price" id="price" value="{{ old('price') }}">
                @error('price')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p>
                <label for="desc">الوصف</label>
                <input type="text" class="desc w3-input" name="desc" id="desc" value="{{ old('desc') }}">
                @error('desc')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p>
                <button class="w3-button w3-blue" id="submit_offer">إنشاء عرض</button>
            </p>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $('#submit_offer').on('click', function(e) {
            e.preventDefault();

            var formData = new FormData($("#offerForm")[0]);

            $.ajax({
                headers: { //19
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'Post',
                url: "{{ route('ajaxOffers.store') }}",
                enctype: 'multipart/form-data',
                /*
                old method
                */
                //data: {
                //    image: $('input#image').val(),
                //    name: $('input#name').val(),
                //    price: $('input#price').val(),
                //    decs: $('input#decs').val(),
                //}, //22
                /*
                New method
                */
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                //
                success: function(data) {
                    if (data.status == true) {
                        $('#success').removeClass('w3-hide');
                    }
                },
                error: function(reject) {
                    alert('Err')
                },
            });
        })
    </script>
@endsection
