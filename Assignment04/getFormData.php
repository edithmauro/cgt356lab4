<?php
if (empty($_POST["name"])){
    header("Location: index.php");
}

$name       =$_POST["name"];  //do this for each of the variables on the 'billing' section
$address    =$_POST["address"];
$city       =$_POST["city"];
$state      =$_POST["state"];
$zip        =$_POST["zip"];
$country    =$_POST["country"];
$phone      =$_POST["phone"];
$email      =$_POST["email"];
$comments   =$_POST["comments"];

if (empty($_POST["Sname"])){
    $Sname = $name;
    $Saddress = $address;
    $Scity = $city;
    $Sstate = $state;
    $Szip = $zip;
    $Scountry = $country;

}
else{
    $Sname = $_POST["Sname"];
    $Saddress = $_POST["Saddress"];
    $Scity = $_POST["Scity"];
    $Sstate = $_POST["Sstate"];
    $Szip = $_POST["Szip"];
    $Scountry = $_POST["Scountry"];
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Get Form Data</title>
    <style type="text/css">
        ul{ list-style:none; margin-top:5px;}
        ul li{ display:block; float:left; width:100%; height:1%;}
        ul li label{ float:left; padding:7px; color:#666ff}
        ul li input, ul li textarea{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:60%;}
        li input:focus, li textarea:focus{ border:1px solid #666;}
        fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
        legend{ color:#000099; margin:0 10px 0 0; padding: 0 5px; font-size:11pt; font-weight:bold; }
        label span{ color:#ff0000; }
        fieldset#billing {display: block; margin-left: auto; margin-right: auto; width: 50%;}
		/*position:absolute; top:60px; left:20px; */
		
        fieldset#shipping {display: block; margin-left: auto; margin-right: auto; width: 50%;}
		/*position:absolute; top:60px; left:460px;*/
		
        fieldset#submit {display: block; margin-left: auto; margin-right: auto; text-align:center; background-color: #000; width: 150px;}
		/*position:absolute; top:540px; left:20px; */
		
        fieldset input#SubmitBtn{ background-color: #000; color:#fff; border:1px solid#000; padding:5px; width:150px; }
		
    </style>
</head>

<body>
<h1 style="font-size:14pt; margin-left: 50%;">Get Form Data</h1>

<form id="form0" name="form0" method="post" action="displayFormData.php">
    <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
            <li> <label title="Name" for="name">Name<span>*</span></label> <input type="text" name="name" id="name" size="30" maxlength="30" value = "<?php echo ($name);?>" /></li>
            <li> <label title="Address" for="address">Address<span>*</span></label> <input type="text" name="address" id="address" size="30" maxlength="30" value = "<?php echo ($address);?>"/></li>
            <li> <label title="City" for="city">City<span>*</span></label> <input type="text" name="city" id="city" size="30" maxlength="30" value = "<?php echo ($city);?>" /></li>
            <li> <label title="State" for="state">State<span>*</span></label> <input type="text" name="state" id="state" size="30" maxlength="30" value = "<?php echo ($state);?>"/></li>
            <li> <label title="Zip" for="zip">Zip<span>*</span></label> <input type="text" name="zip" id="zip" size="30" maxlength="30" value = "<?php echo ($zip);?>"/></li>
            <li> <label title="Country" for="country">Country<span>*</span></label> <input type="text" name="country" id="country" size="30" maxlength="30" value = "<?php echo ($country);?>"/></li>
            <li> <label title="Phone" for="phone">Phone<span>*</span></label> <input type="text" name="phone" id="phone" size="30" maxlength="30" value = "<?php echo ($phone);?>" /></li>
            <li> <label title="Email" for="email">Email<span>*</span></label> <input type="text" name="email" id="email" size="30" maxlength="30" value = "<?php echo ($email);?>" /></li>
            <li> <label title="Comments" for="comments">Questions or Comments<span>*</span></label> <textarea rows="5" cols="40" name="comments" id="comments" ><?php echo ($comments);?></textarea></li>
       </ul>
    </fieldset>

    <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul>
            <li> <label title="SName" for="Sname">Name</label> <input type="text" name="Sname" id="Sname" size="30" maxlength="30" value = "<?php echo ($Sname);?>" /></li>
            <li> <label title="SAddress" for="Saddress">Address</label> <input type="text" name="Saddress" id="Saddress" size="30" maxlength="30"  value = "<?php echo ($Saddress);?>"/></li>
            <li> <label title="SCity" for="Scity">City</label> <input type="text" name="Scity" id="Scity" size="30" maxlength="30" value = "<?php echo ($Scity);?>"/></li>
            <li> <label title="SState" for="Sstate">State</label> <input type="text" name="Sstate" id="Sstate" size="30" maxlength="30" value = "<?php echo ($Sstate);?>"/></li>
            <li> <label title="SZip" for="Szip">Zip</label> <input type="text" name="Szip" id="Szip" size="30" maxlength="30" value = "<?php echo ($Szip);?>"/></li>
            <li> <label title="SCountry" for="Scountry">Country</label> <input type="text" name="Scountry" id="Scountry" size="30" maxlength="30" value = "<?php echo ($Scountry);?>"/></li>
        </ul>
    </fieldset>

    <fieldset id="submit">
    <input id="SubmitBtn" name="SubmitBtn" type="submit" value="Proceed" />
    </fieldset>

    <script type="text/javascript">
        document.getElementByID("name").focus();
    </script>

    </form>

    </body>

    </html>

