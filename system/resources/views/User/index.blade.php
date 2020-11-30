@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Daftar User
							<a href="{{url('User/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>
						<div class="card-body">
							<table class="table table-datatable">
								<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Username</th>
									<th>Nama</th>
									<th>Email</th>
								</thead>
								<tbody>
									@foreach($list_user as $user)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>
												<div class="btn-group">
												    <a href="{{url('User', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
													<a href="{{url('User', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
													@include('admin.utils.delete', ['url' => url('User', $user->id)])
												</div>
											</td>
											<td>{{$user->username}}</td>
											<td>{{$user->nama}}</td>
											<td>{{$user->email}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
		        </div>
				</div>
		    </section>
@endsection