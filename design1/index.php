<?php include "header.php"; ?>
  <header class="header-2">
    <div class="page-header min-vh-75" style="background-image: url('./assets/img/curved-images/curved.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">E-Learning System</h1>
            <p class="lead text-white mt-3">Expand your career opportunities. <br /> Transform your life through education. </p>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
          </g>
        </svg>
      </div>
    </div>
  </header>
      
    <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="row text-center my-sm-5 mt-5">
          <div class="col-lg-6 mx-auto">
            <h2 class="text-primary text-gradient mb-0">Videos</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="row mt-4">
          <?php
if(isset($_POST['search'])){
$search_value=$_POST["search1"];

        $sql="SELECT * from category where sub_category='$search_value'";
        $result = mysqli_query($conn,$sql);
        

        while($row = mysqli_fetch_assoc($result)){
          $sql = "SELECT * FROM video Where series='1' AND subject='$search_value' And status='Active' ORDER BY id DESC";
          $res = mysqli_query($conn, $sql);
     
          if (mysqli_num_rows($res) > 0) {
            while ($video = mysqli_fetch_assoc($res)) { 
             $subject=$video['subject'];
             $series=$video['series'];
             ?>
             <div class="col-md-4">
                 <a href="">
                   <div class="card move-on-hover">
       
                   <video src="../video/<?=$video['video_url']?>"  
                  controls >
                
         
                 </div>
                   <div class="mt-2 ms-2">
                     <?php echo "<b>".$subject."&nbsp;&nbsp;" .$series."</b>";?>
                     <a href="sign-up.php" style="float:right;color:#0074D9;">For Any Query Click Here</a>
                   </div>
                 </a>
               </div>
               <?php 
          }
        }else {
          echo "<h1>Result Not Found</h1>";
        }
         
           // echo 'First_name:  '.$row["sub_category"];


            }  
          }     

          
      else{ 
		 $sql = "SELECT * FROM video Where series='1' AND status='Active' ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
        $subject=$video['subject'];
        $series=$video['series'];
		 ?>
          <div class="col-md-4">
              <a href="">
                <div class="card move-on-hover">
    
                <video src="../video/<?=$video['video_url']?>"  
	        	   controls >
             
      
              </div>
                <div class="mt-2 ms-2">
                  <?php echo "<b>".$subject."&nbsp;&nbsp;" .$series."</b>";?>
                  <a href="sign-up.php" style="float:right;color:#0074D9;">For Any Query Click Here</a>
                </div>
              </a>
            </div>
            <?php 
	     }
		 }
    }
		 ?>

           
            
          </div>
        </div>
        
      </div>
  </section>
  <!-- -------- START Content Presentation Docs ------- -->
    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <?php include "footer.php"; ?>
