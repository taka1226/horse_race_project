<option value="" hidden>選択してください</option>
@foreach ($suppliers as $one_supplier)
    <option value="{{ $one_supplier->id }}">{{ $one_supplier->name }}</option>
@endforeach
