<table border="1">
<tr>
	<th>商品名</th>
	<th>値段</th>
	<th>在庫</th>
</tr>
@foreach($items as $item)
<tr>
	<td><a href={{ route('detail', ['id' => $item->id] )}}>{{ $item->name }}</a></td>
	<td>{{ $item->price }}円</td>
@if ($item->stock > '0')
	<td>在庫有</td>
@else
	<td>在庫無</td>
@endif
</tr>
@endforeach
