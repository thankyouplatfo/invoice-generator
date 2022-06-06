<h3>جدول لأصناف والمنتجات</h3>
<p class="w3-col w3-right mt-3">
<div class="w3-col" style="max-height: 320px;overflow:auto">
    <table class="w3-table-all w3-table-bordered">
        <tr>
            <th class="w3-center">#</th>
            <th class="w3-center">الصنف</th>
            <th class="w3-center">المنتج</th>
            <th class="w3-center">قيمة الضريبة</th>
            <th class="w3-center">الصافي الإجمالي</th>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <select class="w3-input category_name" name="category_name" id="category_name">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <select class="w3-input category_name" name="category_name" id="category_name">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
    </table>
</div>
</p>
