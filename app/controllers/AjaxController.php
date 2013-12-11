<?php
class AjaxController extends BaseController{
	public function doLogin(){
		$id = Input::get('id');
		$user = User::where('student_number','=',$id)->first();
		//updating user status. 1 = online, 0 = logout
		$return_value = array('first_name' => '', 'last_name' => '');
		if($user == null){
			echo json_encode($return_value);
		}else{
			if($user->status == 1){
				$user->status = 0; 
			}else{
				$user->status = 1;
			}
			$user->save();
			$current_date = date('Y-m-d');
			$current_time = date('H:i:s');
			DB::insert("INSERT INTO time(user_id,login_date,status) VALUES(" . $user->id . ",NOW()," . $user->status . ")");
			$return_value = array('first_name' => $user->first_name, 'last_name' => $user->last_name, 'status' => $user->status);
			echo json_encode($return_value);
		}
		
	}
}