@extends('layout')

@section('content')
	<div class="pure-g-r" id="wrapper">	
		<div class="pure-u-1-2" id="left-wrapper">
			<div class="pure-u-1" id="left-title">
				<img src = "img/keepr-logo.png" alt = "keepr-logo"><h1>Keepr Timekeeping System</h1>
			</div>
			<div class="pure-u-1" id="left-content">
				<br/><br/>
				<div class="pure-u-1" id="input-wrapper">
				<h1>Student Number</h1>
				<input type="text" id="sn" maxlength = "11"/>
				<br/><br/>
					<div id="enter-wrapper">
						<input type="button" value="Enter" id="enter"/>
						
					</div>
					
				</div>
				
				
			</div>
		</div>
		
		<div class="pure-u-1-2" id="right-wrapper">
			<div class="pure-u-1" id="right-title">
				<h1>Member Information</h1>
			</div>
			
			<div class="pure-u-1" id="right-content">
				
				<div class="pure-u-1" id="picbox-wrapper">
					
					<div class="pure-u-1-10" id="picbox">
						<img src="uploads/chi.jpg">
					</div>
					
				</div>				
				<div class="pure-u-1" id="table-wrapper">
					<table class="pure-table pure-table-bordered" id="member-info">
						<tbody>
							<tr>
								<td id = "student-number"><h3>Student Number</h3></td>
							</tr>
							
							<tr>
								<td id = "name"><h3>Name</h3></td>
							</tr>
							
							<tr>
								<td id = "division"><h3>Division</h3></td>
							</tr>
							<tr>
								<td id = "course"><h3>Course</h3></td>
							</tr>
							<tr>
								<td id = "year-level"><h3>Year Level</h3></td>
							</tr>
						</tbody>
				</table>
			</div>
		</div>
	</div>
</div>	
@stop