<?php
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $query = "SELECT `id`,`username`,`email` FROM `user` 
              ORDER BY `reg_date` DESC  ";
    $execQuery = mysqli_query($connection, $query);
    if(mysqli_num_rows($execQuery) > 0){ 
        while ($result = mysqli_fetch_array($execQuery, MYSQLI_NUM)) { ?>
                <tr>
                    <td><?php echo $result[0] ?></td>
                    <td><?php echo $result[1] ?></td>
                    <td><?php echo $result[2] ?></td>
                    <td><a id='setAdmin' href="./set-admin.php?userID=<?php echo $result[0]; ?> ">Make Admin</a> | 
                        <a id='deleteUser' href="./delete-user.php?userID=<?php echo $result[0]; ?>">Delete</a>
                    </td>
                </tr>
  <?php      } 
        
    }
?>
