<style>
	.logo{
		padding: 0 0 0 5px;
		font-size: 20px;
		background-color:#ffccbc ;
	}
	.logo a{
		text-decoration: none;
		display: block;
	}
	.logo:hover{
		font-size: 22px;
		background-color: gray;
	}
	.menu{
		margin-top: 30px;
	    padding: 0px 5px 0 5px;
	}
	.upper_menu{
		background-color: #ff0000;
		font-size: 20px;
		padding: 0 0 0 5px;
	}
	.upper_menu:hover{
		font-size: 22px;
		cursor: pointer;
		background-color: gray;
	}
	.upper_menu_active{

	}
	.sub_menu a{
		background-color: red;
		display: block;
		font-size: 16px;
		text-indent: 20px;
		text-decoration: none;
	}
	.sub_menu a:hover{
		font-size: 18px;
		background-color: gray;
	}
	.sub_menu_active{
		background-color: white !important;
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
	    			<a target="_top" href="/{{ $sub_menu['MenuNo'] }}" class="{{ $sub_menu_active }}">{{ $sub_menu['MenuNo'] }} {{ $sub_menu['MenuName'] }}</a>
	    		@endforeach
			</div>
	@endforeach
</div>
