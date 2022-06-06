<h3>معلومات الطرف المصدر للفاتورة (الشركة) </h3>
<p class=" w3-col l4 w3-right m-0">
    <label for="name">الإسم</label>
    <select class="name w3-select" name="name" id="companiesNames">
        @foreach ($companies as $com)
            <option class="comName" value="{{ $com->id }}">{{ $com->name }}</option>
        @endforeach
    </select>
    @error('name')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l4 w3-right">
    <label for="sub_address">العنوان الفرعي</label>
    <input class="w3-input sub_address" name="sub_address" id="sub_address" value="{{ old('sub_address') }}"
        type="text">
    @error('sub_address')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l2 w3-right">
    <label for="city">المدينة</label>
    <input class="w3-input city" name="city" id="city" value="{{ old('city') }}" type="text">
    @error('city')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l2 w3-right">
    <label for="district">الحي</label>
    <input class="w3-input district" name="district" id="district" value="{{ old('district') }}" type="text">
    @error('district')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l4 w3-right">
    <label for="science">أقرب علم</label>
    <input class="w3-input science" name="science" id="science" value="{{ old('science') }}" type="text">
    @error('science')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l4 w3-right">
    <label for="phone_number_1">رقم التلفيون 1</label>
    <input class="w3-input phone_number_1 w3-left-aligh" dir="ltr" name="phone_number_1" id="phone_number_1"
        value="{{ old('phone_number_1') }}" type="text">
    @error('phone_number_1')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col l4 w3-right">
    <label for="phone_number_2">رقم التلفون 2</label>
    <input class="w3-input phone_number_2 w3-left-aligh" dir="ltr" name="phone_number_2" id="phone_number_2"
        value="{{ old('phone_number_2') }}" type="text">
    @error('phone_number_2')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
<p class=" w3-col w3-right">
    <label for="tax_number">رقم التعريف الضريبي</label>
    <input class="w3-input tax_number" name="tax_number" id="tax_number" value="{{ old('tax_number') }}" type="text">
    @error('tax_number')
        <b class="err">{{ $message }}</b>
    @enderror
</p>
