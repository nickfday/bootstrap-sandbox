<?php include 'includes/header.php';?>

<?php
  if(isset($_GET['page'])) {
    $page = htmlentities($_GET['page']);?>
    <h2 style="margin-top:60px;"><?php echo $page;?></h2>
    <?php } 
    else {
      $page = NULL;
    }
?>
    <?php 
    function my_function($foo) {
      if ($foo > 12) {
        return "good evening";
      }
      elseif ($foo == 10) {
        return "its 10";
      }
      else {
        return "good morn";
      }
    }
    $greet = my_function(10);
    
    echo "$greet";
    
        error_reporting(E_ALL);


        
   function test()
  {
  $foo = "Declared inside the function. <br />";
  $bar = "Also declared inside the function. <br />";
  return array($foo,$bar);
  }
  //list($one,$two) = test();
  $array = test();
  $foo = $array[0];
  $bar = $array[1];
/*
* Notices are issued that $foo and $bar are undefined
*/
echo $foo, $bar;



    
    ?>

    </div>
    </div>
    </div>
        <form action="form.php" method="post">
          <input type="text" name="username" />
          <input type="text" name="email" />
          <input type="submit" value="Register!" />
        </form>
      
      <?php include 'includes/footer.php';?>

  </body>
</html>

