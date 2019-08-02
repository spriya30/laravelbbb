@extends('voyager::master')
@section('content')
<div class="container-fluid">
	<h4>Meetings</h4></br>
	<div class="row">
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
                    <th>Meeting ID</th>
					<th>Meeting Name</th>										
					<th>Duration</th>	
					<th>Organiser</th>	
					<th>Action</th>
				</tr>
			</thead>
			<tbody>              
			@foreach($meetingsList as $meeting)
                <tr>
					<td>{{$meeting->meetingID}}</td>
					<td>{{$meeting->meetingName}}</td>
					<td>{{$meeting->duration}}</td>
					<td>{{$meeting->organiser}}</td>
                </tr>						
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
