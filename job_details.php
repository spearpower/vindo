<?php
require_once('cfg/func.php');
require_once('cfg/db_link.php');
$id= clean($_POST['dID']);
select('job_name,science,job_scale,job_desc,job_req,job_exp,job_deadline,job_years,job_date,job_vacancy,Job_nature,job_location','tbl_job','job_id',$id);
?>

 
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" style="background-image: url('assets/img/hero/about.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2 style="text-transform: uppercase"><?php echo $job_name ;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="assets/img/logo/fav.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?php echo $job_name;?></h4>
                                    </a>
                                    <ul>
                                        <li><?php if($science=='1'){echo'Science';}else{ echo'Non Science';} ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $job_location;?></li>
                                        <li>Salery Scale:<?php echo $job_scale;?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p><?php echo $job_desc; ?></p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                              	 <?php echo $job_exp ;?>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                                  <?php echo $job_req ;?>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span><?php echo $job_date;?></span></li>
                              <li>Location : <span><?php echo $job_location;?></span></li>
                              <li>Vacancy : <span><?php echo $job_vacancy ;?></span></li>
                              <li>Job nature : <span><?php echo $Job_nature ;?></span></li>
                              <li>Salary :  <span><?php echo $job_scale ;?></span></li>
                              <li>Application Deadline : <span><?php echo $job_deadline ;?></span></li>
                          </ul>
                         <div class="apply-btn2">
                            <a href="login.php" class="btn">Apply Now</a>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <p>Busitema University is a multi-campus Public University located in Eastern Uganda. Applications are invited from suitably qualified candidates to fill vacant positions at the University. </p>
							<div class="small-section-tittle"><h4>Shortlisted Candidates</h4></div>
							<?php $sql  = "SELECT * FROM job_app WHERE app_status='Shortlisted' AND job_id ='$id'";$qry = $connect->query($sql) or trigger_error($connect->error, E_USER_ERROR);$cnt0 = $qry->num_rows;  ?>
							<table>
							<thead><th>Ref </th> <th> Names</th> <th> Email</th> </thead>
							<?php $c =1; while($info = $qry->fetch_assoc()){$AppID= $info['app_id'];$jobID= $info['job_id'];$user= $info['user_id'];
							 select('name,email','tbl_user','user_id',$user);
							?>
							<tbody><tr><td><?php echo $c;?></td><td><?php echo $name;?></td><td><?php echo $email;?></td></tr></tbody>
							<?php $c++; } ?> 
							</table>
                            
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->