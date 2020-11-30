@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Detail User
						</div>
						<div class="card-body">
							<h2>{{$user->username}}</h2>
							<hr>
							<p>
								{!! nl2br($user->nama) !!}
							</p>
							<p>
								{!! nl2br($user->email) !!}
							</p>
						</div>
					</div>
		        </div>
				</div>
		    </section>
@endsection