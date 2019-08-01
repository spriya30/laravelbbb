
@extends('voyager::master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<h4 style="text-align:center">Meetings</h4></br>
		<div class="col-lg-8 col-lg-offset-2">
			<div class="panel panel-default"></br>
				<div class="panel-body">
					<form method="post" id="createmeeting" action="{{ url('/meeting/create') }}" class="form-horizontal" id= "create_meeeting_form">
						{{ csrf_field() }}
							
						<div class="form-group">
							<label for="inputsm" class="control-label col-lg-4 col-sm-4">Meeting Name*</label>
							<div class="col-lg-8 col-sm-8">
								<input class="form-control " id="meetingName" name="meetingName" type="text" maxlength='100' required>
								<span style="font-size: 10px; font-style: italic;" id="p1"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="inputsm" class="control-label col-lg-4 col-sm-4">Meeting Subject*</label>
							<div class="col-lg-8 col-sm-8">
								<input class="form-control " id="meetingSubject" name="meeting_subject" type="text" maxlength='200' required>
								<span style="font-size: 10px; font-style: italic;" id="p2"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="inputsm" class="control-label col-lg-4 col-sm-4">Additional Attendee/s</label>
							<div class="col-lg-8 col-sm-8">
								<input class="form-control " name="email" type="email" id="externalParticipants">
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="inputlg" class="control-label col-lg-4 col-sm-4">Duration</label>
							    <div class="col-lg-3 col-sm-3">
									<input class="form-control " id="duration" name="duration" placeholder="min" type="number" >
								</div>
							</div>
						</div>
						<div class="form-group" style="text-align:center;">
							<div class="col-lg-4 col-lg-offset-5" id="submit_div">
								<input type="submit" id="create_meeting" class="btn btn-success btn-sm" value="Meeting">
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
