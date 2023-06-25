<option value="" hidden>選択してください</option>
@foreach ($properties as $one_property)
    <option value="{{ $one_property->id }}">{{ $one_property->name }}</option>
@endforeach
