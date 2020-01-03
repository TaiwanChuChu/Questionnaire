@extends('layouts.main')
@section('css')
	<style>
		/* list grid style .. */

		/* 最上方查詢區塊 */
		.srh_wrap {
		    width: 100%;
		    display: flex;
		    flex-direction: row;
		    flex-wrap: wrap;
		    justify-content: flex-start;
		}

		/* 各項查詢小區塊 */
		.srh_wrap_item {
			width: 20%;
		}

		/* 查詢區塊title */
		.srh_wrap_item_title {
			margin-bottom: 5px;
			font-weight: bold;
		}

		/* 查詢區塊content */
		.srh_wrap_item_content {}

		/* 查詢區塊之功能元件 */
		.srh_wrap_item_option {
		 	border: 0;
		    padding: 7px;
		    border-radius: 3px;
		    color: #ffffff;
		    background-color: #0095ff;
		    margin: 16px 5px 0 0;
		}

		.srh_wrap_item_option:hover {
		    box-shadow: 8px 5px 5px rgb(200, 219, 225, 0.5) ;
		    border-style: inset;
		    background-color: #39739d;
		}

		.option_wrap {
		    width: 100%;
		    margin-top: 40px;
		}

		.option_wrap_option {
			display: inline-block;
			border: 0;
		    padding: 7px;
		    border-radius: 3px;
		    color: #ffffff;
		    background-color: #0095ff;
		    margin-right: 5px;
		}

		.option_wrap_option > a {
		    color: #ffffff;
		}

		.option_wrap_option:hover {
		    box-shadow: 8px 5px 5px rgb(200, 219, 225, 0.5) ;
		    border-style: inset;
		    background-color: #39739d;
		}

		.data_grid_wrap {
		    width: 100%;
		    margin-top: 40px;
		}
		.data_table {
		    width: 100%;
		}

		.data_table th, td {
		    box-sizing: border-box;
		    padding: 5px;
		    border: 1px solid black;
		}

		.data_table_head {}
		.data_table_body {}

		.data_table_tr {}

		.data_table_td {

		}

		.data_table_option {
			border: 0;
		    padding: 7px;
		    border-radius: 3px;
		    color: #ffffff;
		    background-color: #0095ff;
		    margin-right: 5px;
		}

		.data_table_option > a {
		    color: #ffffff;
		}

		.data_table_option:hover {
			box-shadow: 8px 5px 5px rgb(200, 219, 225, 0.5) ;
		    border-style: inset;
		    background-color: #39739d;
		}


		.data_table_order {
		    font-size: 18px;
		}

		.data_table_order:hover {
		    font-weight: bold;
		}

		.cus_pagination {
		    display: flex;
		    margin-top: 20px;
		    justify-content: center;
		}

		.no_data {
		    margin-top: 20px;
		    padding: 10px;
		    background-color: red;
		    border-radius: 2px;
		}
	</style>
@endsection

@section('main_content')
	<div class="form_list">
		<form method="post">
			@csrf
			<div class="srh_wrap">
				@yield('srh_wrap')
			</div>

			<div class="option_wrap">
				@yield('option_wrap')
			</div>

			<div class="data_grid_wrap">
				@if($data->count() > 0)
					<table class="data_table">
						<thead class="data_table_head">
							@yield('data_table_head')
						</thead>
						<tbody class="data_table_body">
							@yield('data_table_tr')
						</tbody>
					</table>
					<div class="cus_pagination">
						@yield('cus_pagination')
					</div>
				@else
					<div class="no_data">查無資料顯示！</div>
				@endif
			</div>
		</form>
	</div>
@endsection
