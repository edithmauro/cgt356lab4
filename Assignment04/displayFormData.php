<?php
if (empty($_POST["name"])){
    header("Location: index.php");
}

$name=$_POST["name"];  //do this for each of the variables on the 'billing' section
$address=$_POST[""];
$name=$_POST["name"];
$name=$_POST["name"];
$name=$_POST["name"];
$name=$_POST["name"];
$name=$_POST["name"];
$name=$_POST["name"];
$name=$_POST["name"];


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Display Form Data</title>
    <style type="text/css">
        ul{ list-style:none; margin-top:5px;}
        ul li{ display:block; float:left; width:100%; height:1%;}
        ul li label{ float:left; padding:7px; color:#666ff}
        ul li input, ul li textarea{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:60%;}
        li input:focus, li textarea:focus{ border:1px solid #666;}
        fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
        legend{ color:#000099; margin:0 10px 0 0; padding: 0 5px; font-size:11pt; font-weight:bold; }
        label span{ color:#ff0000; }
        fieldset#billing {width: 50%; display: block; margin-left: auto; margin-right: auto;}
        fieldset#shipping { width: 50%; display: block; margin-left: auto; margin-right: auto;}
		
		.center{text-align: center;}
		
    </style>
</head>

<body>
<h1 style="font-size:14pt; margin-left: 30%;"> Display Form Data</h1>

<form id="form0" name="form0" method="post" action="getFormData.php">
    <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul class = "center">
            <li> <span><?php echo($_POST["name"]); ?></span></li>
            <li> <span><?php echo($_POST["address"]); ?></span></li>
            <li> <span><?php echo($_POST["city"]); ?></span></li>
            <li> <span><?php echo($_POST["state"]); ?></span></li>
            <li> <span><?php echo($_POST["zip"]); ?></span></li>
            <li> <span><?php echo($_POST["country"]); ?></span></li>
            <li> <span><?php echo($_POST["phone"]); ?></span></li>
            <li> <span><?php echo($_POST["email"]); ?></span></li>
            <li> <span><?php echo($_POST["comments"]); ?></span></li>
       </ul>
    </fieldset>

    <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul class = "center">
            <li> <span><?php echo($_POST["Sname"]); ?></span></li>
            <li> <span><?php echo($_POST["Saddress"]); ?></span></li>
            <li> <span><?php echo($_POST["Scity"]); ?></span></li>
            <li> <span><?php echo($_POST["Sstate"]); ?></span></li>
            <li> <span><?php echo($_POST["Szip"]); ?></span></li>
            <li> <span><?php echo($_POST["Scountry"]); ?></span></li>
        </ul>
    </fieldset>

    </form>

    </body>

    </html>

