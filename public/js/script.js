$(document).ready(function(){
	$("#enter").click(function(){
		if($("#sn").val() == ""){
			$("#sn").notify("Please fill up the student number");
		}else{
			$.post("timein",{id:$("#sn").val()}).done(function(data){
				var student = JSON.parse(data);
				if(student.first_name == ""){
					displayErrorMessage("Student number does not belong to any member!");
				}else{
					if(student.status == 0){
						fillStudentTable(student);
						displayInformationMessage("You have been timed-out");
					}else{
						fillStudentTable(student);
						displayMessage("You have been timed-in");
					}
				}
			});
		}
	});
	function fillStudentTable(student){
		//remove all childs. :) - JM
		$("#student-number h3").remove();
		$("#name h3").remove();
		$("#division h3").remove();
		$("#status h3").remove();
		$("#picbox img").remove();
		//Add information to the dom
		$("#student-number").append("<h3>" + student.student_number + "</h3>");
		$("#name").append("<h3>" + student.last_name + ", " + student.first_name + "</h3>");
		$("#division").append("<h3>" + student.division + "</h3>");
		if(student.status == 0){
			$("#status").append("<h3>Timed Out</h3>");
		}else{
			$("#status").append("<h3>Timed In</h3>");
		}
		//lalagay lahat ng picture. HAHAHA
		$("#picbox").append('<img src = "uploads/' + student.student_number +'.jpg" alt = "picture">');
	}
	function displayMessage(message){
		$.notify(message,"success");
	}
	function displayErrorMessage(message){
		$.notify(message,"error");
	}
	function displayInformationMessage(message){
		$.notify(message,"info");
	}
});