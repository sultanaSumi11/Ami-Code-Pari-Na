
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
        if(isset($_POST['arr']))
        {
	          $arr = $_POST["arr"];
            $value = $_POST["value"];
            $arr = explode(', ', $arr);
            sort($arr);
            $val = array_search($value,$arr);
            echo "Result: ";
            if($val)   echo "True.";
            else       echo "False.";

            print_r($arr);

        }
    ?>
	  
    <!--<script type="text/javascript">
      // Prevent form from submit or refresh
      var form = document.getElementById("myForm");
      function handleForm(event) { event.preventDefault(); }
      form.addEventListener('submit', handleForm);
      // Function
      function insert(){
        $(document).ready(function(){

          // Make an array of languages to insert multiple checkbox values of languages
          

          $.ajax({
            // Action
            url: 'function.php',
            // Method
            type: 'POST',
            data: {
              // Get value
              arr: $("input[name=arr]").val(),
              action: "insert"
            },
            success:function(response){
              // Response is the output of action file
              alert("Sorted array successfully added!");

            }
          });
        });
      }
    </script> -->



  </body>
</html>
