@extends('layouts.edit_form')

@section('edit_form_option_wrap')
	<button type="submit" name="event" value="add" class="option">儲存並離開</button>
	<button class="option">
		<a href="{{ route('s1030') }}">離開</a>
	</button>
@endsection

@section('edit_block')
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<label for="MenuNo">選單編號</label>
		</div>
		<div class="edit_block_item_content">
			<input type="text" id="MenuNo" name="MenuNo" value="{{ $MenuNo }}">
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<label for="MenuName">選單名稱</label>
		</div>
		<div class="edit_block_item_content">
				<input type="text" id="MenuName" name="MenuName" value="{{ $MenuName }}">
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<label for="UpperID">上層選單</label>
		</div>
		<div class="edit_block_item_content">
			<select name="UpperID" id="UpperID">
				{{-- @foreach()
					<option value="" {{ $UpperID == '0' ? 'selected' : '' }}></option>
				@endforeach --}}
			</select>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>隱藏狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="show" name="IsHide" value="0" {{ $IsHide == '0' ? 'checked' : '' }}>
			<label for="show">顯示</label>
			<input type="radio" id="hide" name="IsHide" value="1" {{ $IsHide == '1' ? 'checked' : '' }}>
			<label for="hide">隱藏</label>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>使用狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="use" name="Status" value="1" {{ $Status == '1' ? 'checked' : '' }}>
			<label for="use">使用</label>
			<input type="radio" id="stop" name="Status" value="0" {{ $Status == '0' ? 'checked' : '' }}>
			<label for="stop">停用</label>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>使用狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="use" name="Status" value="1" {{ $Status == '1' ? 'checked' : '' }}>
			<label for="use">使用</label>
			<input type="radio" id="stop" name="Status" value="0" {{ $Status == '0' ? 'checked' : '' }}>
			<label for="stop">停用</label>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>使用狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="use" name="Status" value="1" {{ $Status == '1' ? 'checked' : '' }}>
			<label for="use">使用</label>
			<input type="radio" id="stop" name="Status" value="0" {{ $Status == '0' ? 'checked' : '' }}>
			<label for="stop">停用</label>
		</div>
	</div>
	<div class="edit_block_item">
		<div class="edit_block_item_title">
			<span>使用狀態</span>
		</div>
		<div class="edit_block_item_content">
			<input type="radio" id="use" name="Status" value="1" {{ $Status == '1' ? 'checked' : '' }}>
			<label for="use">使用</label>
			<input type="radio" id="stop" name="Status" value="0" {{ $Status == '0' ? 'checked' : '' }}>
			<label for="stop">停用</label>
		</div>
	</div>
@endsection
