@extends('layouts.dashboard')
@section('breadcrumb')
    إنشاء فاتورة
@endsection
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close w3-left" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ Session::get('msg') }}</strong>
        </div>
    @endif
    <form>
        <ol>
            <li class="w3-text-red" style="font-weight: 900">اختر المستخدم</li>
            <li class="w3-text-red" style="font-weight: 900">المستخدم يجلب قائمة شركاته في القائمة المنسدلة المخصصة لذلك
            </li>
            <li class="w3-text-red" style="font-weight: 900">
                عندما يتم اختيار شركة معينة تقوم بالتالي
                <ol>
                    <li>
                        جلب باقي معلومات الشركة المختارة حاليا
                    </li>
                    <li>
                        جلب قائمة العملاء المرتبطين بالشركة عندا يتم اختيار واحدا تجلب معلوماته
                    </li>
                    <li>
                        تثبت قائمة الأصناف المرتبطة بالشركة في كل صفوف جدول المنتجات تلقائيا
                    </li>

                </ol>
            </li>
            <li>
                عندما اختار صنفا تأتي المنتجات التابعه له في قائمة المنتجات المنسدلة وفي نفس الصف
            </li>
            <li>
                بعد اختيار المنتج تاتي معلوماته في الحقول المخصصة في نفس الصف
            </li>
        </ol>
        @csrf
        <select class="w3-input user_id" name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        @error('user_id')
            <b class="err">{{ $message }}</b>
        @enderror

        <!--company data-->
        <div class="w3-section">
            <div class="w3-border-left w3-boder-black w3-col l6 w3-padding w3-right w3-row-padding">
                @include('inc.company_data')
            </div>
            <div class=" w3-col l6 w3-padding w3-right w3-row-padding">
                @include('inc.customer_data')
            </div>
        </div>
        <!---->
        <div class="w3-col w3-row-padding">
            <p class="w3-col l6 w3-right">
                <label for="invoice_type">العنوان النوعي للفاتورة</label>
                <input class="w3-input invoice_type" name="invoice_type" id="invoice-invoice_type"
                    value="{{ old('invoice_type') }}">
                @error('invoice_type')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p class="w3-col l6 w3-right">
                <label for="quantity">كمية</label>
                <input class="w3-input quantity" name="quantity" id="invoice-quantity" value="{{ old('quantity') }}">
                @error('quantity')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
        </div>
        <!--prudcts table-->
        @include('inc.products_table')
        <div class="w3-clear my-5"></div>
        <p class="w3-col l4 w3-right">
            <label for="total">المجموع</label>
            <input disabled class="w3-input total" name="total" id="invoice-total">
            @error('total')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l4 w3-right">
            <label for="tax_value">قيمة الضريبة</label>
            <input disabled class="w3-input tax_value" name="tax_value" id="invoice-tax_value">
            @error('tax_value')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l4 w3-right">
            <label for="net_tot">صافي الإجمالي</label>
            <input disabled class="w3-input net_tot" name="net_tot" id="invoice-net_tot" value="{{ old('net_tot') }}">
            @error('net_tot')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l4 w3-right">
            <label for="paid_up">المدفوع</label>
            <input disabled class="w3-input paid_up" name="paid_up" id="invoice-paid_up" value="{{ old('paid_up') }}">
            @error('paid_up')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l4 w3-right">
            <label for="the_rest">الباقي</label>
            <input disabled class="w3-input the_rest" name="the_rest" id="invoice-the_rest"
                value="{{ old('the_rest') }}">
            @error('the_rest')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l4 w3-right">
            <label for="payment_type">نوع الدفع</label>
            <input disabled class="w3-input payment_type" name="payment_type" id="invoice-payment_type"
                value="{{ old('payment_type') }}">
            @error('payment_type')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>

        <p class="w3-col l6 w3-right">
            <label for="special_number">رقم خاص</label>
            <input disabled class="w3-input special_number w3-left-align w3-text-green" name="special_number"
                id="invoice-special_number" value="invoice:{{ Str::uuid() }}" dir="rtl">
            @error('special_number')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <p class="w3-col l6 w3-right">
            <label for="time_and_date">الوقت و التاريخ </label>
            <input disabled class="w3-input time_and_date w3-left-align err" name="time_and_date" id="invoice-time_and_date"
                value="{{ Carbon\Carbon::now() }}" dir="rtl">
            @error('time_and_date')
                <b class="err">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="my-3 w3-col">
            <input class="w3-button w3-left w3-blue w3-large" type="submit" value="إنشاء فاتورة">
        </p>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#companiesNames').on('change', function(event) {
                var company = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('getCompanyData') }}",
                    type: 'post',
                    data: {
                        "id": company,
                    },
                    success: function(data) {
                        var val = company - 1;
                        $('#sub_address').val(data[val].sub_address);
                        $('#city').val(data[val].city);
                        $('#district').val(data[val].district);
                        $('#science').val(data[val].science);
                        $('#phone_number_1').val(data[val].phone_number_1);
                        $('#phone_number_2').val(data[val].phone_number_2);
                        $('#tax_number').val(data[val].tax_number);
                    },
                })
            });
            $('#customersNames').on('change', function() {
                var customer = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    url: "{{ route('getCustomerData') }}",
                    type: 'post',
                    data: {
                        "id": customer,
                    },
                    success: function(data) {
                        var val = customer - 1;
                        $('#customer_city').val(data[val].city);
                        $('#customer_district').val(data[val].district);
                        $('#customer_science').val(data[val].science);
                        $('#customer_phone').val(data[val].phone);
                        $('#customer_tax_number').val(data[val].tax_number);
                    }
                });
            })
        });
        $('.category_name').on('change',function(){
            var category = $(this).val();
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
                },
                url: "{{ route('getProductsName') }}",
                type:'post',
                data:{
                    'id':category,
                }
                success:function(data){
                    $('')
                }
            });
        })
    </script>
@endsection
