@extends('layouts.main')
@section('css')
	<style>
		/* edit form style .. */
		.edit_form_option_wrap {
		    width: 100%;
		}

		.edit_form_option_wrap > .option {
			border: 0;
			display: inline-block;
		    padding: 7px;
		    border-radius: 3px;
		    color: #ffffff;
		    background-color: #0095ff;
		    margin-right: 5px;
		}

		.edit_form_option_wrap > .option > a {
		    color: #ffffff;
		}

		.edit_form_option_wrap > .option:hover {
		    box-shadow: 8px 5px 5px rgb(200, 219, 225, 0.5) ;
		    border-style: inset;
		    background-color: #39739d;
		}

		.edit_block {
		    border: 1px solid red;
		    margin-top: 20px;
		    display: flex;
		    flex-direction: row;
		    flex-wrap: wrap;
		    justify-content: flex-start;
		}

		.edit_block_item {
		    margin-bottom: 20px;
		    width: 25%;
		    padding: 3px;
		}

		.edit_block_item_title {
		    padding: 3px;
		    border: 1px solid red;
		    font-weight: bold;
		}


		.edit_block_item_content {
		    padding: 3px;
		    border: 1px solid blue;
		}
	</style>
	<link rel="stylesheet" href="{{ asset('css/edit_form_core.css') }}">
@endsection
@section('main_content')
	<div class="edit_form">
		<form method="post" id="main_form">
			@csrf
			<div class="edit_form_option_wrap">
				@yield('edit_form_option_wrap')
			</div>

			<div class="edit_block">
				@yield('edit_block')
			</div>
		</form>
	</div>
@endsection
@section('javascript')
	<script type="text/javascript" src="{{ asset('js/edit_form_core.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			// 啟用前端表單驗證
	  		$('#main_form').parsley();
		});
	</script>
@endsection
