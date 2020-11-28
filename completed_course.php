

<?php
	  $con=mysqli_connect("localhost","root","","janvi");
	  $sql_select= "SELECT * FROM courses WHERE course_status=0 ORDER BY courses_id DESC";
	  $data= mysqli_query($con,$sql_select);
	  $courses_data=array();
	  while($row=mysqli_fetch_assoc($data)){
		  $courses_data[]=$row;
	  }
	 

	// course_status=0 -> Completed;
	// course_status=1 -> ongoing;
	// course_status=2 -> upcoming;
	  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700"/>
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
 
    <link rel="stylesheet" type="text/css" href="css/completed_course.css">
    <title>Coder's Club</title>
    </head>

    <body>
    
        <div class="completed">
    <div class="wrapper">
    
                           
<?php

    foreach($courses_data as $key=>$value){
				 
                 ?>

        <div class="card">
            <input type="checkbox" id="<?php echo $value['courses_id'] ?>" class="more" aria-hidden="true">
            <div class="content">
                <div class="front" style="background-image: url(<?php echo $value['image'] ?>)">
                    <div class="inner">
                        <h2><?php  echo $value['course_title'] ?></h2>
                        <div class="rating Stars" style="--rating: <?php echo $value['rating'] ?>;" aria-label="Rating of this product is <?php echo $value['rating'] ?> out of 5.">
                       
    </div>
                        <label for="<?php echo $value['courses_id'] ?>" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info one">
                            <span><?php  echo $value['registered_students'] ?></span>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                                <span>Learners</span>
                            </div>
                        </div>
                        <div class="info two">
                            <span><?php echo $value['winner'] ?></span>
                            <div class="icon">
                                <i class="fas fa-trophy"></i>
                                <span>Winners</span>
                            </div>
                        </div>
                        <div class="info three">
                            <span><?php echo $value['rating'] ?></span>
                            <div class="icon">
                                <i class="fas fa-star"></i>
                                <span>Ratings</span>
                            </div>
                        </div>
                        
                        <div class="description">
                        <p> <?php  echo $value['completed_description'] ?> </p>
                        <p> <?php  echo $value['description'] ?> </p>   
                        
                        
                               </div>
                        <div class="location">Ahmedabad</div>
                        <div class="price">
                        <?php  switch($value['price']){
								 
							     case 0:echo "Free";
									break;
								case NULL:echo "Free ";
									break;
								default:echo "@". $value['price'] ."rs. only";
									break;
							    }
							?> 
                       </div>
                        <label for="<?php echo $value['courses_id'] ?>" class="button return " aria-hidden="true">
                            <i class="fas fa-arrow-left"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
      

        <?php
				} 	  
			 

             ?>
               </div>
               </div>
            
</body>
        </html>
        