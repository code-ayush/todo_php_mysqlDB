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
        $row = mysqli_fetch_array($result);

        for($i=0;$row = mysqli_fetch_array($result);$i++){
            echo "<ul>";
            echo "<li> ";
            echo $row['caption'];
            echo "<input type='button' value='Remove' onclick=' location.href = `/remove.php?index=".$row['id']."`'>";
            echo "</li>";
            echo "</ul>";
        }
    ?>

  </body>
</html>
