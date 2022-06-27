<?php
include ("config.php");
$result=mysqli_query($mysqli,"SELECT* from register1 ORDER by id DESC");
?>
<html>
    <head>
        <title>singIn</title>
        <link rel="stylesheet" href="main.css">
    </head>
<body>
    <div>
    <div class="container">
            <h1>singIn form</h1></br>
            <div class="GroBtn">
              <form action="function.php" method="POST">
               <table>
                   <tr>
                       <td class="mahi">singIn</td>
                   </tr>
                   <tr>
                       <td>Username:</td>
                       <td><input type="text" name="Username" required/></td>
                   </tr>
                   <tr>
                      <td>Password:</td>
                      <td><input type="text" name="Password" required/></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="Email" required/></td>
                    </tr>
                    <tr>
                        <td>Number:</td>
                        <td><input type="text" name="Number" required/></td>
                    </tr>
                    <tr>
                        <td>MSG::</td>
                        <td><input type="text" name="MSG" required/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="submit" class= required /></td>
                    </tr>
                </table>

             </form>
             <table border="2">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Number</th>
                <th>MSG</th>
            </tr>
            <?php
            while ($res = mysqli_fetch_array($result)) {  
            
                 echo "<tr>";
                 echo "<td>".$res['Username']."</td>"; 
                 echo "<td>".$res['Password']."</td>"; 
                 echo "<td>".$res['Email']."</td>"; 
                 echo "<td>".$res['Number']."</td>"; 
                 echo "<td>".$res['MSG']."</td>"; 

                 echo "</tr>";

            }
          ?>
        </table>


             
             
         </div>
        </div>
    </div>
</body>
</html>