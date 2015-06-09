@extends('layouts.default')
@section('content')
		<h1>Create New User</h1>

	{!! Form::open(['route'=> 'users.store']) !!}
				<form id='addpatient' action='addPatient.php' method='post'
			accept-charset='UTF-8'>

			<legend>Patient Information</legend>

			<input type='hidden' name='submitted' id='submitted' value='1'/>

			<label for='name' >First Name*: </label>
			<fieldset>
			<div class="form-group">
				<div class="col-sm-4">
				<input type='text' name='firstname' id='firstname' maxlength="50" pattern="[A-Za-z-']+"  title="first name" required/>
				</div>
			</div>
			</fieldset>
			
			
			<label for='name' >Middle Initial: </label>
			<fieldset>
			<div class="form-group">
				<div class="col-sm-4">
				<input type='text' name='middlename' id='middlename' maxlength="50" pattern="[A-Za-z]"  title="middle initial. one letter only." />
				</div>
			</div>
			</fieldset>
			
			
			<label for='name' >Last Name*: </label>
			<fieldset>
			<div class="form-group">
				<div class="col-sm-4">
				<input type='text' name='lastname' id='lastname' maxlength="50" pattern="[A-Za-z-']+"  title="last name" required/>
				</div>
			</div>
			</fieldset>
			
			<label for='name' >Insurance Provider*: </label>
			<fieldset>
			<div class="form-group">
				<div class="col-sm-4">
				<input type='text' name='providername' id='providername' maxlength="50" title="Insurance Provider" required/>
				</div>
			</div>
			</fieldset>
			
			<label for='name' >Date of Birth*: </label>
			<fieldset>
			<div class="form-group">
				<div class="col-sm-4">
				<input type='date' name='dob' id='dob' required/>
				</div>
			</div>
			</fieldset>
			
			
			
					<fieldset>
						<div class="form-group">
							<div class="col-sm-4">
								<div>{!! Form::submit() !!}</div>

							</div>
						</div>
					</fieldset>
		</form>

		



@stop