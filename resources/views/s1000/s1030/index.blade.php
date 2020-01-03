@extends('layouts.form_list')
@section('srh_wrap')
	<div class="srh_wrap_item">
		<div class="srh_wrap_item_title">
			<label for="MenuNo">選單編號</label>
		</div>
		<div class="srh_wrap_item_content">
			<input type="text" id="MenuNo" name="MenuNo" value={{ $MenuNo }}>
		</div>
	</div>
	<div class="srh_wrap_item">
		<div class="srh_wrap_item_title">
			<label for="MenuName">選單名稱</label>
		</div>
		<div class="srh_wrap_item_content">
			<input type="text" id="MenuName" name="MenuName" value={{ $MenuName }}>
		</div>
	</div>

	<div class="srh_wrap_item">
		<button type="submit" name="event" value="search" class="srh_wrap_item_option">查詢</button>
	</div>
@endsection

@section('option_wrap')
	<div class="option_wrap_option">
		<a href="{{ route('s1030_view', ['add']) }}">新增</a>
	</div>
@endsection

@section('data_table_head')
	<th width="12%">功能</th>
	<th><a class="data_table_order" href="?order=a.MenuNo">選單編號</a><span class="data_table_sort">{{ $order == 'a.MenuNo' ? $sortMark : '' }}</span></th>
	<th><a class="data_table_order" href="?order=a.MenuName">選單名稱</a><span class="data_table_sort">{{ $order == 'a.MenuName' ? $sortMark : '' }}</span></th>
	<th><a class="data_table_order" href="?order=a.UpperID">上層選單</a><span class="data_table_sort">{{ $order == 'a.UpperID' ? $sortMark : '' }}</span></th>
	<th><a class="data_table_order" href="?order=a.IsHide">隱藏狀態</a><span class="data_table_sort">{{ $order == 'a.IsHide' ? $sortMark : '' }}</span></th>
	<th><a class="data_table_order" href="?order=a.Status">使用狀態</a><span class="data_table_sort">{{ $order == 'a.Status' ? $sortMark : '' }}</span></th>
@endsection

@section('data_table_tr')
	@foreach ($data as $dataVal)
		<tr class="data_table_tr">
			<td class="data_table_td">
				<button class="data_table_option"><a href="{{ route('s1030_view', ['edit', $dataVal->MenuID]) }}">編輯</a></button>
				<button class="data_table_option"><a href="{{ route('s1030_view', ['view', $dataVal->MenuID]) }}">檢視</a></button>
			</td>
			<td class="data_table_td">{{ $dataVal->MenuNo }}</td>
			<td class="data_table_td">{{ $dataVal->MenuName }}</td>
			<td class="data_table_td">{{ $dataVal->UpperMenuName }}</td>
			<td class="data_table_td">{{ $dataVal->IsHide == '1' ? '隱藏' : '顯示' }}</td>
			<td class="data_table_td">{{ $dataVal->Status == '1' ? '使用中' : '停用中' }}</td>
		</tr>
	@endforeach
@endsection

@section('cus_pagination')
	{{ $data->links() }}
@endsection
