<?php 
	session_start();

    $clientName = htmlspecialchars($_POST['clientName']);
    $amount = $_POST['amount'];
    $accountType = $_POST['accountType'];
    $deduction = 0;
    $newBalance = 0;
    	
    switch ($accountType) {
    	case "savings":
    		if ($amount < 2000) {
    			$deduction = 200;
    			$newBalance = $amount - $deduction;
    		}

    		setcookie("clientName", $clientName, time() + (1 * 365 * 24 * 60 * 60));
    		setcookie("amount", $amount, time() + (1 * 365 * 24 * 60 * 60));
    		setcookie("accountType", $accountType, time() + (1 * 365 * 24 * 60 * 60));
    		setcookie("deduction", $deduction, time() + (1 * 365 * 24 * 60 * 60));
    		setcookie("newBalance", $newBalance, time() + (1 * 365 * 24 * 60 * 60));
    		$_SESSION['accountType'] = $accountType;
    		break;
    	case "current":
    		if ($amount < 5000) {
    			$deduction = 500;
    			$newBalance = $amount - $deduction;
    		}

    		$_SESSION['clientName'] = $clientName;
    		$_SESSION['amount'] = $amount;
    		$_SESSION['accountType'] = $accountType;
    		$_SESSION['deduction'] = $deduction;
    		$_SESSION['newBalance'] = $newBalance;
    		break;
    }
    
    header("Location: output.php");
    exit();
?>