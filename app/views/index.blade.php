@extends('layouts.master')

@section('content')

<div id="headerwrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-1">
				<h1 class="centered">Sign In</h1>
				<form>
				    <div class="form-group">
				        <input type="text" class="form-control input-lg" placeholder="Email">
				    </div>
				    <div class="form-group">
				        <input type="password" class="form-control input-lg" placeholder="Password">
				    </div>
				    <div class="form-group">
				        <input type="password" class="form-control input-lg" placeholder="Confirm Password">
				    </div>
				    <div class="form-group">
				        <button class="btn btn-primary btn-lg">Sign In</button>
				        <span><a href="#">Need help?</a></span>
				        <span class="pull-right"><a href="#">New Registration</a></span>
				    </div>
				</form>				
			</div><!-- /col-lg-6 -->	
		</div>
	</div><!-- /container -->
</div><!-- /headerwrap -->

@stop