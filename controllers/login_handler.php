<?php 
include('../inc/config-reporting.php');


include('../adLDAP/src/adLDAP.php');

//$adLDAP->setAdminUsername('MyCampusBind');
//$adLDAP->setAdminPassword('!g4jHjF7WC');
//$adLDAP->connect();


if(isset($_POST['username'])){
		extract($_POST);


/* ######################## */
	function lastInsertId($queryID) {

        sqlsrv_next_result($queryID);

        sqlsrv_fetch($queryID);

        return sqlsrv_get_field($queryID, 0);

    } 
	
	function strand($length){
      if($length > 0)
        return chr(rand(33, 126)) . strand($length - 1);
	}
	// include('../inc/own_db_functions.php');
/* ############# fund iotn EnD  */

/*adLDAP start*/

	$adLDAP = new adLDAP(['ad_port' => 636, 'use_tls' => true, 'use_ssl' => true]);

	$authUser = $adLDAP->user()->authenticate($username, $password);

	// var_dump($authUser);  //check user 
	$result=$adLDAP->user()->inGroup($username,"__________enter group controller here from AD_______________");

	if($authUser && $result){
		
		session_start();
		$_SESSION['email'] = $username;
		$_SESSION['is_pi'] = '';
		$_SESSION['account'] = $username;
		$_SESSION['user_id'] = $username;
		
		$_SESSION['user_name'] = $username;
		$msg ="Successful Login";
		
		$redirect= "dashboard.php";
		if($return_url!=""){
			$redirect = $return_url;
		}
		
		echo "
		<script>				
			window.location.href='../$redirect'
		</script>
		";
	}
	else{
		$msg = "Username/Password is correct or you do not have access to this application!";
		$redirect= "login.php";
	}
	echo "
	<script>
		alert('$msg') ;
		window.location.href='../$redirect'
	</script>
	";
}


?>

