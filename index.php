<!DOCTYPE html>
<html>
  <body>
    <form action="/submit.php" method="POST">
      <div>
        Text :<input type="text" name="text"/>
      </div>
      <div>
        <input type="submit" value="Submit" />
      </div>
    </form>

    <?php

        include "connection.php";
        
        $result = mysqli_query($conn,"SELECT * FROM lol");

        for($i=0;$row = mysqli_fetch_assoc($result);$i++){
            echo "<ul>";
            echo "<li> ";
            echo "<input type='checkbox' name='status' value='status' onclick='location.href = `/check.php?index=".$row['id']."`'";
            if($row['isCompleted']=='1'){
              echo "checked>";
            }
            else{
              echo ">";
            }
            echo $row['caption'];
            echo "<input type='button' value='Remove' onclick=' location.href = `/remove.php?index=".$row['id']."`'>";
            echo "</li>";
            echo "</ul>";
        }
    ?>

  </body>
</html>
