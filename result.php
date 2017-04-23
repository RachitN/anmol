<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$car1=$_POST['car1'];
$query="select * from addcar where car='$car1'";
$result=mysqli_query($c,$query);
if($result)
{$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $car1m=$row['mileage'];
 $car1p=$row['price'];
}
$car2=$_POST['car2'];
$query="select * from addcar where car='$car2'";
$result=mysqli_query($c,$query);
if($result)
{$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $car2m=$row['mileage'];
 $car2p=$row['price'];
}
ECHO <<< START
<HTML>
<head>
<TITLE> COMPARISION <br><br><br><br><br></TITLE>
</head>
<style>
div {
    background-color: silver;
    width: 600px;
    border: 12px solid blue;
    padding: 25px;
    margin: 25px;
}
.center {
    text-align: center;
    color: black;
}
thead{color:green;}
tbody{color:red;}
tfoot{color:blue;}
table,th,td{border:1px solid black;
}
ul.a {
    list-style-type: circle;
}

ul.b {
    list-style-type: square;
}

ol.c {
    list-style-type: upper-roman;
}

ol.d {
    list-style-type: lower-alpha;
}
</style>
<BODY><div> 
<h1 class="center">COMPARISION </H1>
<CENTER><TABLE><thead>
<TR>
<Th><ul type="a"><li>CAR</li></ul></th>
<Th><ul type="b"><li>$car1</li></ul></th>
<th><ul type="b"><li>$car2</li></ul></th>
</tr></thead><tbody>
<TR>
<TD><ul type="a"><li>MILEAGE</li></ul>
<TD><ul type="b"><li>$car1m</li></ul>
<td><ul type="b"><li>$car2m</li></ul>
</tr></tbody>
<TR><tfoot>
<TD><ul type="a"><li>PRICE</li></ul>
<TD><ul type="b"><li>$car1p</li></ul>
<td><ul type="b"><li>$car2p</li></ul>
</tr></tfoot></CENTER>
</table></div>
</body>
</head>
</html>
START;
}
?>