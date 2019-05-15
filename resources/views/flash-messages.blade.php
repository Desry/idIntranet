kk<style>
	.icon_style {
		position: absolute;
		right: 10px;
		top: 10px;
		font-size: 20px;
		color: white;
		cursor: pointer;
	}
</style>


<div class="row" id="alert_box">
  <div class="col s9 m9 right">
    <div class="card red darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            @if($errors->any())
				<div class="msg green-text">
					@foreach($errors->all() as $error)
						<ul>
							<li>{{ $error }}</li>
						</ul>
					@endforeach
				</div>
			@endif
        </div>
      </div>
      <div class="col s12 m2">
      	<i class="fa fa-times icon_style" id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>


