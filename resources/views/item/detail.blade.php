<table border="1">
<tr>
	<th>商品名</th>
	<th>商品説明</th>
	<th>価格</th>
	<th>在庫</th>
</tr>
@foreach ($items as $item)
<tr>
	<td>{{ $item->name }}</td>
	<td>{{ $item->detail }}</td>
	<td>{{ $item->price }}円</td>
	@if ($item->stock > '0')
		<td>在庫有</td>
	@else
		<td>在庫無</td>
	@endif
</tr>
@endforeach
</table>
