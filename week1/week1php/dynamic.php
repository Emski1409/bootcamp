<!DOCTYPE html>
<html>
  <head>  
    <title>Dynamic table</title>
  </head>

  <body>
    <h1> Display table</h1>
    <h2> today is... </h2>
      <table>
        <thead>
           <tr>
                <th>id</th>
                <th>value a</th>
                <th>value b</th>
            </tr>
          </thead>
          
           <tbody>

                   <?php  for ($i=1; $i < 20; $i++) { ?>
                    <tr>
                      <td>
                        <?php echo $i ?>
                      </td>
                      <td style="background-color: rgb(84,<?php echo $i*10 ?>, 157)">
                      <?php echo $i + 25 ?>
                      </td> 
                      <td>
                        <?php echo $i * 3?>
                      </td>
                    </tr>
                  <?php  } ?>
      
              
          </tbody>
      </table>
  </body>

</html>