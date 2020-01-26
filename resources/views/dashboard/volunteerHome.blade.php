@extends('layouts.app')
@section('nav')
<ul class="nav justify-content-end">
		<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle btn" style="color: wheat"
					 href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
							 onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
								{{"تسجيل الخروج"}}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
						</form>
				</div>
		</li>
		<li class="nav-item">
				<a class="nav-link" href="/dashboard/" style="color: #e2e3e5">التبرعات</a>
		</li>
		<li class="nav-item active">
				<button class="navbar-toggler" type="button" style=" position: absolute; left: 15px;"
								data-toggle="collapse" data-target="#navbarToggleExternalContent"
								aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
		</li>
</ul>
@endsection
@section('content')
	<div class="container">
		<div class="table-wrapper">
			<table class="table table-striped table-hover table-bordered">
				<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th style="width: 20px">المحافظه</th>
					<th style="width: 20px">الحي</th>
					<th style="width:200px">الشارع</th>
					<th style="width:200px">التارخ</th>
					<th style="width:200px">الحاله</th>
				</tr>
				</thead>
				<tbody class="trow">

				</tbody>
			</table>
		</div>
	</div>
@endsection