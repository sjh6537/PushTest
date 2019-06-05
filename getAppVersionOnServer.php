<?php 
if (!empty($_POST)) {
  if(!empty($_POST["Key"]) and $_POST["OS"] and (strcmp($POST["Key"],"qiyi")==0) ) {

    switch ($_POST["OS"]) {
        case "iOS":
        echo "v1(03)";   
        break;
        
        case "Android":
        echo "v1(04)";
        
        break;
        
    }
  
  }
} else {
  echo "GET";
}
?>