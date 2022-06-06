<h3>معلومات الطرف الموجه اليه الفاتورة (العميل)</h3>
<p class=" w3-col l4 w3-right">
    <label for="name">الإسم</label>
    <select class="w3-input name" name="name" id="customersNames">
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>
    @error('name')
        <b class="err">{{ $message }}</b>
    @enderror
</p>

<p class=" w3-col l4 w3-right">
    <label for="city">المدينة</label>
    <input class="w3-input city" name="city" id="customer_city" value="{{ old('city') }}" type="text">
    @error('city')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l4 w3-right">
    <label for="district">الحي</label>
    <input class="w3-input district" name="district" id="customer_district" value="{{ old('district') }}" type="text">
    @error('district')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l6 w3-right">
    <label for="science">أقرب علم</label>
    <input class="w3-input science" name="science" id="customer_science" value="{{ old('science') }}" type="text">
    @error('science')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l6 w3-right">
    <label for="phone">رقم الجوال</label>
    <input class="w3-input phone" name="phone" id="customer_phone" value="{{ old('phone') }}" type="text">
    @error('phone')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col w3-right">
    <label for="tax_number">رقم التعريف الضريبي</label>
    <input class="w3-input tax_number" name="tax_number" id="customer_tax_number" value="{{ old('tax_number') }}"
        type="text">
    @error('tax_number')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
