
<?php include 'layout/aheader.php'; ?>
<?php include '../connection/connection.php'; ?>
                   

<?php include 'layout/asidebar.php'; ?>


<head>
<head>
<style> 
        .GFG { 
            background-color: #DCDCDC; 
            border: 1px solid black; 
            color: green; 
            padding: 1px 06px; 
            text-align: center; 
            display: inline-block; 
            font-size: 13px;  
            cursor: pointer; 
            text-decoration:none; 
        } 
    </style> 
</head> 
  
<div class="page-wrapper">
            <div class="content">
               <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
                                <h3><?php 
                                    $q = "SELECT count(email) as total FROM student";
                                    $res=mysqli_query($conn,$q);
                                    $values=mysqli_fetch_assoc($res);
                                    $num=$values['total'];
                                    echo $num;echo"<br>";
                                ?></h3>
								<span class="widget-title1">Tot.Count students <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-user-circle"></i></span>
                            <div class="dash-widget-info text-right">
                            <h3><?php 

                                    $q1 = "SELECT count(email) as total FROM teacher";
                                    $res1=mysqli_query($conn,$q1);
                                    $values1=mysqli_fetch_assoc($res1);
                                    $num1=$values1['total'];
                                    echo $num1;echo"<br>";
                                ?></h3>
								
                                <span class="widget-title2">Tot.Count Teachers <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                            <h3><?php 
                                    $q2 = "SELECT count(sub_category) as total FROM category";
                                    $res2=mysqli_query($conn,$q2);
                                    $values2=mysqli_fetch_assoc($res2);
                                    $num2=$values2['total'];
                                    echo $num2;echo"<br>";

                                ?></h3>
								
                                <span class="widget-title3">Active courses <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php 
                                
                                
                                ?></h3>
                                <span class="widget-title4">Inactive courses <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                    <br>
                    <br>
<br>

           
<?php include 'layout/afooter.php'; ?>            
           
