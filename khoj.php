
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KHOJ</title>
    <!--<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>-->
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <?php
       include("menu.php");
    ?>
    <div class="main-content">
    <div class = "form">
    <form id="myForm" action="" method="post" autocomplete="off">
      <label for="">Input Values:</label>
      <input type="text" name="arr" placeholder="Enter the array." required value="">
      <label for="">Value:</label>
      <input type="number" name="value" placeholder="Enter Search Value" required value="">

      <button type="submit" name="button" onclick = "insert();">Khoj</button>
    </form>
    </div>
    </div>

    <?php
        //include("merge_sort.php");
        //include("binary_search.php");
        $arr = $_POST["arr"];
        $value = $_POST["value"];
        $arr = explode(', ', $arr);
        

        sort($arr);
        $val = array_search($value,$arr);
        echo "Result: ";
        if($val)   echo "True.";
        else       echo "False.";

        print_r($arr);
    ?>



  </body>
</html>