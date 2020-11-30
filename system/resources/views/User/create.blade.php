@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Tambah Data User
						</div>
						<div class="card-body">
							<form action="{{url('User')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="" class="control-label">Username</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Nama</label>
									<input name="nama" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Email</label>
									<input name="email" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Password</label>
									<input name="password" class="form-control"></textarea>
								</div>
								<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
							</form>
						</div>
					</div>
		        </div>
				</div>
		    </section>
@endsection