 <?php
class RegisterController extends BaseController{
	public function register(){
		$rules = array('student_number' => "required|min:8",
				   'major' => "required",
				   'last_name' => "required",
				   'first_name' => "required",
				   'middle_name' => "required",
				   'picture' => 'image',
				   'contact_number' => "required",
				   'division' => "required");
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('register')->withErrors($validator);
		}else{
			$student_number = Input::get('student_number');
			$first_name = Input::get('first_name');
			$last_name = Input::get('last_name');
			$middle_name = Input::get('middle_name');
			$contact_number = Input::get('contact_number');
			//copying the image to the directory
			$file = Input::file("picture");
			if(isset($file)){
				$extension = $file->getClientOriginalExtension();
				$filename = $student_number .'.'. $extension;
				$file->move('uploads',$filename);
			}
			//adding the user to the database
			$user = new User();
			$user->student_number = $student_number;
			$user->first_name = $first_name;
			$user->middle_name = $middle_name;
			$user->last_name = $last_name;
			$user->status = 0;	
			$user->save();
			$message = "User Succesfully Added";
			Session::put('message',$message);
			return Redirect::to('register');
		}
	}
}