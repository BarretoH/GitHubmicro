<?
session_start();
If ($_SESSION["micro_instructor"] !== "tempLogin"){
	if ($_POST["username"] !== "") {
		if ($_POST["username"] === "micro" && $_POST["password"] === "excel") {
			$_SESSION["micro_instructor"] = "tempLogin";
			header('Location: https://barretoh.github.io/GitHubmicro/MicroInstructor/instructor_resources.php');		
		} else {
			$_SESSION["micro_error"] === "Wrong Username or Password";
			echo "Wrong Username or Password";
		}
	} else{
		header('Location: https://barretoh.github.io/GitHubmicro/MicroInstructor/index.htm');
	}

} else {
	header('Location: https://barretoh.github.io/GitHubmicro/MicroInstructor/instructor_resources.php');
}

?>