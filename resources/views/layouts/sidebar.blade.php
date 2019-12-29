<style>
	.logo {
		padding: 0 0 0 5px;
		font-size: 20px;
		background-color:#ffccbc ;
	}
	.logo a {
		text-decoration: none;
		display: block;
	}
	.logo:hover {
		font-size: 22px;
		background-color: gray;
	}
	.menu {
		margin-top: 30px;
	    padding: 0px 5px 0 5px;
	}
	.upper_menu {
		/*background-color: #ff0000;*/
		font-weight: 500;
		font-size: 18px;
		margin-top: 2px;
		margin-bottom: 2px;
		padding: 0 0 0 5px;
		color: white;
	}
	.upper_menu:hover {
		/*font-size: 22px;*/
		/*cursor: pointer;*/
		/*background-color: gray;*/
	}
	.upper_menu_active {

	}
	.sub_menu a {
		display: block;
		color: rgba(255, 255, 255, 0.5);
		font-size: 14px;
		text-indent: 20px;
		text-decoration: none;
		margin-top: 1px;
		margin-bottom: 1px;
		padding: 1px;
	}
	.sub_menu a:hover {
		font-size: 16px;
	}
	.sub_menu_active {
		color: rgba(255, 255, 255, 1) !important;
		background-color: #a1a1a1;
	}

	/* 已選中之選單就不會有互動 */
	.sub_menu_active:hover {
		font-size: 16px !important;
	}
</style>
<div class="menu">
	<div class="logo">
		<a href="{{ route('home') }}">首頁區</a>
	</div>
	@foreach($Menu as $menu)
			<h2 class="upper_menu">{{ $menu->MenuNo }} {{ $menu->MenuName }}</h2>
			<div class="sub_menu">
				@foreach($SubMenu[$menu->MenuID] as $sub_menu)
					@php
						if($sub_menu['MenuNo'] === \Request::route()->getName()){
							$sub_menu_active = 'sub_menu_active';
						}else{
							$sub_menu_active = '';
						}
					@endphp
	    			<a target="_top" href="/{{ $menu->MenuNo }}/{{ $sub_menu['MenuNo'] }}" class="{{ $sub_menu_active }}">{{ $sub_menu['MenuNo'] }} {{ $sub_menu['MenuName'] }}</a>
	    		@endforeach
			</div>
	@endforeach
</div>
