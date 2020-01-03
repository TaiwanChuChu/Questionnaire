@extends('layouts.edit_form')

@section('edit_form_option_wrap')
	<button type="submit" name="event" value="add" class="option">儲存並離開</button>
	<div class="option">
		<a href="{{ route('s1030') }}">離開</a>
	</div>
@endsection

@section('edit_block')
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<label for="MenuNo">選單編號</label>
		</div>
		<div class="edit_block_item_content">
			<input type="email" id="MenuNo" name="MenuNo" value="{{ $MenuNo }}" required data-parsley-type="email">
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<label for="MenuName">選單名稱</label>
		</div>
		<div class="edit_block_item_content">
				<input type="text" id="MenuName" name="MenuName" value="{{ $MenuName }}" required>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<label for="UpperID">上層選單</label>
		</div>
		<div class="edit_block_item_content">
			<select name="UpperID" id="UpperID" required>
				@foreach($UpperOption as $UpperVal)
					<option value="{{ $UpperVal->MenuID }}" {{ $UpperID == $UpperVal->MenuID ? 'selected' : '' }}>{{ $UpperVal->MenuName }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>隱藏狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="show" name="IsHide" value="0" {{ $IsHide == '0' ? 'checked' : '' }} required>
			<label for="show">顯示</label>
			<input type="radio" id="hide" name="IsHide" value="1" {{ $IsHide == '1' ? 'checked' : '' }} required>
			<label for="hide">隱藏</label>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>使用狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="use" name="Status" value="1" {{ $Status == '1' ? 'checked' : '' }} required>
			<label for="use">使用</label>
			<input type="radio" id="stop" name="Status" value="0" {{ $Status == '0' ? 'checked' : '' }} required>
			<label for="stop">停用</label>
		</div>
	</div>
@endsection
