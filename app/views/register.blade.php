@extends('admin-layout')

@section('content')
			
			{{ Form::open(array('url' => 'register/adduser', 'files' => true, 'method' => 'post')) }}
            <h1>Register</h1>
                <div class = "row">
                    <div class = "col-md-12">
                        <?php
                           if (!Session::has('message')) {
                             $message = Session::get('message');
                             echo "User Successfully Added";
                            }
                        ?>
                    </div>
                </div>
    			<div class = "row">
    				<div class = "col-md-3">
    					{{Form::text('student_number','',array('class' => 'form-control','placeholder' => 'Student Number' , 'maxlength' => '11'))}}
    				</div>
    				<div class = "col-md-3">
    					{{Form::select('major',array('0' => 'BSIT', '1' => 'BSCS', '2' => 'BSIS', '3' => 'ACT', '4' => 'BSEMC'), null, array('class' => 'form-control'))}}
    				</div>
    			</div>
    			<div class = "row">
    				<div class = "col-md-4">
    					{{Form::text('first_name','',array('class' => 'form-control','placeholder' => 'First Name', 'maxlength' => '50'))}}
    				</div>
    				<div class = "col-md-4">
    					{{Form::text('middle_name','',array('class' => 'form-control','placeholder' => 'Middle Name', 'maxlength' => '20'))}}
    				</div>
    				<div class = "col-md-4">
    					{{Form::text('last_name','',array('class' => 'form-control','placeholder' => 'Last Name', 'maxlength' => '20'))}}
    				</div>
    			</div>
    			<div class = "row">
    				<div class = "col-md-5">
    					{{Form::text('contact_number','',array('class' => 'form-control', 'placeholder' => 'Contact Number' , 'maxlength' => '20'))}}
    				</div>
    				<div class = "col-md-4 file-container">
                        Choose Photo
    					{{Form::file('picture')}}
    				</div>
    			</div>
                <div class = "row">
                    <div class = "col-md-4">
                        {{Form::select('division',array('Systems' => 'Systems', 'Web' => 'Web', 'Multimedia' => 'Multimedia', 'Documentation' => 'Documentation', 'Training' => 'Training'), null, array('class' => 'form-control'))}}
                    </div>  
                </div>
                <div class = "row">
                    <div class = "col-md-8">
                        {{Form::submit('Register')}}
                    </div>
                </div>

                <div class = "row">
                    <?php
                        foreach ($errors->all() as $message){
                            echo '<h6 class = "error"> *' . $message . '<h6>';      
                        }
                    ?>
                </div>
			{{ Form::close() }}
@stop