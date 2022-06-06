@extends('layouts.dashboard')
@section('breadcrumb')
    التصنيفات <a href="{{ route('ajaxOffers.create') }}" class=" w3-button w3-green w3-large m-3 w3-left"><i
            class="fas fa-plus w3-xlarge"></i></a>
@endsection
@section('content')
    {{-- @if (Session::has('msg')) --}}
    <div class="alert alert-danger alert-dismissible fade show w3-hide" role="alert" id="success">
        <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>{{ __('site.msg_d') }}</strong>
    </div>
    {{-- @endif --}}
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الإسم</th>
                <th class="w3-center">الصورة </th>
                <th class="w3-center">السعر</th>
                <th class="w3-center">الوصف</th>
                <th class="w3-center">تعديل</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($offers as $offer)
                <tr class="offerRow{{ $offer->id }}">
                    <td class="w3-center">{{ $offer->id }}</td>
                    <td class="w3-center"><a
                            href="{{ route('ajaxOffers.show', $offer->id) }}">{{ $offer->name }}</a>
                    </td>
                    <td class="w3-center" style="background-image: url({{ asset('storage/' . $offer->image) }})">
                    </td>
                    <td class="w3-center">{{ $offer->price }}</td>
                    <td class="w3-center">{{ $offer->desc }}</td>
                    <!---->
                    <td class="w3-center"><a class="w3-button w3-bar-item w3-yellow"
                            href="{{ route('ajaxOffers.edit', $offer->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td class="w3-center">
                        <button class="w3-button w3-bar-item w3-red del_off" type="submit" del_off="{{ $offer->id }}">
                            <img src="{{ asset('images/ajax.png') }}" alt=""> |
                            <i class="fa-solid fa-trash"> </i>
                        </button>
                    </td>
                </tr>
                {{-- <form action="{{ route('ajaxOffers.destroy', $offer->id) }}" id="del_offer" method="post">@csrf
                    @method('DELETE')
                </form> --}}
            @endforeach
        </table>
    </div>
@endsection
@section('paginate')
    {{ $offers->links() }}
@endsection
@section('script')
    <script>
        $(document).on('click', '.del_off', function(e) {
            e.preventDefault();
            var del_off = $(this).attr('del_off');
            $.ajax({
                type: 'post',
                url: "{{ route('ajax.offers.delete') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': del_off
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#success').show();
                    }
                    $('.offerRow' + data.id).remove();
                },

                error: function(reject) {}
            });
        });
    </script>
@endsection
