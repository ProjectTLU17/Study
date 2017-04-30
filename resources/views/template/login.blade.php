@extends('template.layouts')
@section('title','Đăng Nhập')
@section('header')
@endsection
@section('main')
    <div class="container" style="margin-top:40px;">
      {!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}
    {!!Form::open(['route'=>'login'])!!}
      {!!Form::token()!!}
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default panel-frm">
				<div class="panel-heading panel-heading-frm">
					<strong> HOME LAND COPORATION </strong>
				</div>
				<div class="panel-body">
						<fieldset>
							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span>
											<input name="username" value=""  placeholder="Tài khoản" class="form-control form-frm-input" type="text">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-lock"></i>
											</span>
											<input name="password" placeholder="Mật khẩu" class="form-control form-frm-input" type="password">
										</div>
									</div>
										<div class="form-group">
										<input class="btn btn-lg btn-primary btn-block" value="Sign in" type="submit">
									</div>
								</div>
							</div>
						</fieldset>
				</div>
      </div>
		</div>
	 </div>
	{!!Form::close() !!}
</div>
