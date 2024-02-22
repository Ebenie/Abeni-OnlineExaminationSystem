<?php
$selected_value="";
 $conn = mysqli_connect("localhost","id21911728_ebeni","Eben4628$","id21911728_onlinevotingsystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])) {

    if(isset($_POST['rdb'])) {
        $selected_value = $_POST['rdb'];
        
        
        $selected_value = mysqli_real_escape_string($conn, $selected_value);
        $update_query = "UPDATE users SET party = '$selected_value' WHERE id = 1";
        $update_result = mysqli_query($conn, $update_query);
        if($update_result) {
            header("Location: success.php");
            exit;
        } else {
            echo "Error updating selected value in the database: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    } else {
        header("Location: index.php");
        exit;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Online Voting System</title>

    <style>
  

a:hover{
    text-decoration: none;
    color: dodgerblue;
    font-size: 20px;
}

</style>
</head>
<body>
    <header>
        
        <h1>Online Voting System</h1>

        <a href="index.php" title="Log out from the system">Log out</a>
    </header>
    <main>
        <div email="parties">
            
        </div>
   <form method="post" >    
<div class="container">

  <div class="box">

      <h2>Ethiopian Prosperity Party</h2>
        <h4>Goal :-  Historically dominant coalition aiming for national unity, economic development, and democratic governance.</h4><br>
        <input type="radio" name="rdb" value="Ethiopian Prosperity Party" id="epp"><label><b>Ethiopian Prosperity Party</b></label>
  </div>
  <div class="box">
 <h2>Oromo Federalist Congress</h2>
        <h4>Goal :-  Advocates for the rights and autonomy of the Oromo people within a federal democratic system, emphasizing political representation, social justice, and economic development for the Oromo region.</h4><br>
        <input type="radio" name="rdb" value="Oromo Liberation Front" id="ofc"><label><b>Oromo Liberation Front</b></label>
  </div>
  <div class="box">
       <h2>Amhara Democratic Party</h2>
        <h4>Goal :-  Represents the interests of the Amhara people, emphasizing regional development, cultural heritage, and political empowerment.</h4><br>
        <input type="radio"  name="rdb" value="Amhara Democratic Party" id="adp"><label><b>Amhara Democratic Party</b></label>
  </div>
</div>
<div class="container">
  <div class="box">
   <h2>Tigray People's Liberation Front</h2>
        <h4>Goal :-  Historically focused on the rights and autonomy of the Tigray region, promoting equitable development and self-governance</h4><br>
        <input type="radio" name="rdb" value="Tigray People's Liberation Front" id="tplf"><label><b>Tigray People's Liberation Front</b></label></div>
  <div class="box">
   <h2>Ethiopian Citizens for Social Justice</h2>
        <h4>Goal :-  Campaigns for social justice, human rights, and accountable governance across Ethiopia, advocating for democratic reforms.</h4><br>
        <input type="radio" name="rdb" value="Ethiopian Citizens for Social Justice" id="ecsj"><label><b>Ethiopian Citizens for Social Justice</b></label></div>
  <div class="box" >
       <h2>Ginbot 7 Movement for Unity and Democracy</h2>
        <h4>Goal :- Strives for democratic governance, rule of law, and socio-economic development, advocating for political pluralism and human rights.</h4><br>
        <input type="radio" name="rdb"value="Ginbot 7 Movement for Unity and Democracy" id="ginbot" ><label><b>Ginbot 7 Movement for Unity and Democracy</b></label>
  </div>
</div>
<div class="container">
  <div class="box">
   <h2>All Ethiopian Unity Party</h2>
        <h4>Goal :-  Seeks to promote national unity, democracy, and social justice, advocating for equitable development and political inclusivity.</h4><br>
        <input type="radio" name="rdb" value="All Ethiopian Unity Party" id="aeup"><label><b>All Ethiopian Unity Party</b></label></div>
  <div class="box">
   <h2>Afar National Democratic Party</h2>
        <h4>Goal :-  Represents the interests of the Afar people, focusing on regional development, cultural preservation, and political representation.</h4><br>
        <input type="radio" name="rdb"value="Afar National Democratic Party" id="afar"><label><b>Afar National Democratic Party</b></label></div>
  <div class="box"> <h2>Ethiopian Democratic Party</h2>
        <h4>Goal :-  Historically dominant coalition aiming for national unity, economic development, and democratic governance.</h4><br>
        <input type="radio" name="rdb" value="Ethiopian Democratic Party" id = "edp" ><label><b>Ethiopian Democratic Party</b></label></div>


       
</div>
    </main>
    <div class="submit">

    
</div>
<center>
 <button type="submit" name="submit">Submit</button></center>
    </form>
</body>
</html>
