@extends('layouts.form_list')
@section('srh_wrap')
	<label for="MenuNo">選單編號</label>
	<input type="text" id="MenuNo" name="MenuNo" value={{ $MenuNo }}>

	<label for="MenuName">選單名稱</label>
	<input type="text" id="MenuName" name="MenuName" value={{ $MenuName }}>

	<button type="submit" name="event" value="search">查詢</button>
@endsection

@section('option_wrap')
	<button>
		<a href="{{ route('s1030_view', ['add']) }}">新增</a>
	</button>
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
		<tr>
			<td>
				<button><a href="{{ route('s1030_view', ['edit', $dataVal->MenuID]) }}">編輯</a></button>
				<button><a href="{{ route('s1030_view', ['view', $dataVal->MenuID]) }}">檢視</a></button>
			</td>
			<td>{{ $dataVal->MenuNo }}</td>
			<td>{{ $dataVal->MenuName }}</td>
			<td>{{ $dataVal->UpperMenuName }}</td>
			<td>{{ $dataVal->IsHide == '1' ? '隱藏' : '顯示' }}</td>
			<td>{{ $dataVal->Status == '1' ? '使用中' : '停用中' }}</td>
		</tr>
	@endforeach
@endsection

@section('cus_pagination')
	{{ $data->links() }}
@endsection
