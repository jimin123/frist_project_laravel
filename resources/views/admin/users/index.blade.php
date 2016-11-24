	@extends('admin.templates.master')
	@section('content')
	@include('admin.users.partial.head')
	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Danh sách Users</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
							<div class="row">
								<div class="col-sm-6"></div>
								<div class="col-sm-6"></div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
										<thead>
											<tr role="row">
												<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Mã số</th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Username</th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Email</th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Hành động</th>
											</tr>
										</thead>
										<tbody>
											@foreach($list as $item)
											<tr role="row" class="odd">
												<td class="sorting_1">{{ $item->Id }}</td>
												<td>{{ $item->Username }}</td>
												<td>{{ $item->Email }}</td>
												<td class="option">
													<a href="#" title="Chỉnh sửa" class="tipS ">
														<img src="http://localhost:8000/img/icons/color/pencil.png" />
													</a>

													<a href="#" title="Xóa" class="tips" style="margin-left: 10px" >
														<img src="http://localhost:8000/img/icons/color/delete.png" />
													</a>

												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
	</section>
	<!-- /.main content -->
	@endsection


