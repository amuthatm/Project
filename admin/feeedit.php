
<?php
include ("header.php");
?>
<html>
<head>
    <script language="JavaScript">

        function validate()
        {
            if(document.myForm.class.selectedIndex=="")
            {
                alert ( "Please select field!");
                return false;
            }



            if(document.myForm.sec.selectedIndex=="")
            {
                alert ( "Please select field!");
                return false;
            }
        }


    </script>
</head>



<body style="padding: 150px">

<form name="myForm" method="post" action="fee.php" onSubmit="return validate();">

    <br><br>




    <div style=" position: absolute; left: 560px;">
        <strong>Class</strong>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="class" style="background-color:white; color:black;">

            <option value="-1" >select..</option>

            <option value="I">I</option>

            <option value="II">II</option> <option value="III">III</option> <option value="IV">IV</option> <option value="V">V</option>
            <option value="VI">VI</option> <option value="VII">VII</option> <option value="VIII">VIII</option> <option value="IX">IX</option>
            <option value="X">X</option>

        </select>
    </div>
    <br><br>

    <div style=" position: absolute; left: 540px;">
        <strong>Section</strong>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="sec" style="background-color:white; color:black;">

            <option value="-1" >select..</option>

            <option value="A">A</option>

            <option value="B">B</option>

        </select>
    </div>
    <br><br>


    <div align="center">
     <input type="submit" name="go" value="EDIT" style="color:black">
     <a href="admin1.php"> <input type="button" value="CLEAR" align="center" style="color:black;" > </a>

    </div>

</form>
<?php
echo"<BR><BR><BR><BR><br><br><br>";
include("footer.php");
?>

</body>
</html>