<?php 
include("path.php");

$option = $_GET['option'];
include(ROOT_PATH."/app/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Aweasome-->
    <script src="https://kit.fontawesome.com/8f6c44eec4.js" crossorigin="anonymous"></script>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <!--  Custom Style-->
    <link rel="stylesheet" href="assets/css/style.css">



    <title>Find Tutor</title>
</head>
<body>
   
   
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>




   <!--  Page Wrapper  -->
     
      <div class="page-wrapper">



   
  <!--  Registration -->

  <div class="container">
   <div class="title">Basic Info</div>            
   <form action=" <?php echo 'registration.php' . '?option='; echo $option; ?> " method="post" enctype="multipart/form-data">

   <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

      <div class="user-details">
         <div class="input-box">
            <label class="details">Name</label>
            <input type="text" name="username"  class="text-input" >
          </div>          
          <div class="input-box">
            <label class="details">Email</label>
            <input type="text" name="email"  class="text-input" >
          </div>
          <div class="input-box">
            <label class="details">Phone No.</label>
            <input type="text" name="phone"  class="text-input" >
          </div>
          <div  class="input-box">
         <label>District</label>
                <select name="district" class="text-input">                                                                                                                            
                  <option>All District</option>
                                <?php foreach ($district as $key => $district): ?>                                    
                                        <option value="<?php echo $district['name'] ?>"><?php echo $district['name'] ?></option>
                                <?php endforeach; ?>
                </select>            

         </div>   
         <div class="input-box">
      <label>Area</label>
              <select name="area" class="text-input">                                                                                              
                <option>All Area</option>
                <?// $area = selectArea('upazilas',$id); ?>
                <?php                         
                foreach ($area as $key => $area): ?>                                    
                     <option value="<?php echo $area['name'] ?>"><?php echo $area['name'] ?></option>
                <?php endforeach; ?>                      
              </select>                        
      </div>          
      <div class="input-box">
         <label class="details">Password</label>
         <input type="password" name="password" class="text-input" >
       </div>
       <div class="input-box">
           <label>Profile Picture</label>
           <input type="file" name="img" class="text-input">
        </div>
       <div class="input-box">
         <label class="details">Confirm Password</label>
         <input type="password" name="passwordConf"  class="text-input" >
       </div>             
      <div class="button-rgt">
         <button type="submit" name="register-btn">Submit</button>
      </div>
   </div>
 </form>
</div>
  

<!--    // Registration  -->


      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>

