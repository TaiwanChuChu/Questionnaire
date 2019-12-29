@extends('layouts.main')
@section('css')
	<style>
		/* list grid style .. */
		.srh_wrap {
		    width: 100%;
		}

		.option_wrap {
		    width: 100%;
		    margin-top: 40px;
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
						<thead>
							@yield('data_table_head')
						</thead>
						<tbody>
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
