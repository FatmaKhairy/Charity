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
				<a class="nav-link" href="/dashboard/donations" style="color: #e2e3e5">التبرعات</a>
		</li>
	<li class="nav-item">
		<a class="nav-link" href="/" style=" position: absolute; left: 15px;color: #778899"><h3>et<span>3</span>am</h3></a>
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
				@if($volDons->count()>0)
				@foreach($volDons as $index=>$volDon)
					<tr>
						<td>{{$index+1}}</td>
						<td>{{$volDon->governorate_name}}</td>
						<td>{{$volDon->city_name}}</td>
						<td>{{$volDon->street_name}}</td>
						<td>{{$volDon->created_at}}</td>
						<td>
							<form style="display: inline-block" action="{{route('dashboard.volunteer.destroy',$volDon->id)}}" method="post">
									{{csrf_field()}}
									{{method_field('delete')}}
									<button type="submit" class="btn" style="background-color: #ad1457;color: wheat">تم توصيل التبرع</button>
								</form>
						</td>
					</tr>
				@endforeach
					@else
				<tr>
					<td colspan="6"><h2 style="color: #851443">لم تقم باضافه اي تطوع </h2></td>
				</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@endsection