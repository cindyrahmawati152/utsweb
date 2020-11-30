@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Daftar Artikel
							<a href="{{url('Artikel/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>
						<div class="card-body">
							<table class="table table-datatable">
								<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Judul</th>
									<th>Deskripsi</th>
								</thead>
								<tbody>
									@foreach($list_artikel as $artikel)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>
												<div class="btn-group">
												    <a href="{{url('Artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
													<a href="{{url('Artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
													@include('admin.utils.delete', ['url' => url('Artikel', $artikel->id)])
												</div>
											</td>
											<td>{{$artikel->judul}}</td>
											<td>{{$artikel->deskripsi}}</td>
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