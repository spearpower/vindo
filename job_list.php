
<!-- Count of Job list Start -->
<div class="row">
<div class="col-lg-12">
	<div class="count-job mb-35">
		<span><?php echo($jobs); ?> Jobs found</span>
		<!-- Select job items start -->
		<div class="select-job-items">
			<span>Sort by</span>
			<select name="select">
				<option value="">None</option>
				<option value="">job list</option>
				<option value="">job list</option>
				<option value="">job list</option>
			</select>
		</div>
		<!--  Select job items End-->
	</div>
</div>
</div>
<!-- Count of Job list End -->                               
<!-- single-job-content -->
<?php $c =1; while($info = $qry->fetch_assoc()){$id= $info['job_id'];$position= $info['job_name'];$science= $info['science']; $job= $info['job_scale'];$vac= $info['job_vacancy'];$date= nicetime($info['job_date']);$location= $info['job_location'];?>
<!-- single-job-content -->
<div class="single-job-items mb-30">
<div class="job-items">
	<div class="company-img">
		<a href="#"><img src="assets/img/logo/fav.png" alt=""></a>
	</div>
	<div class="job-tittle job-tittle2">
		<a href="#">
			<h4><?php echo $position; ?></h4>
		</a>
		<ul>
			<li><?php if($science=='1'){echo'Science';}else{ echo'Non Science';} ?></li>
			<li><i class="fas fa-map-marker-alt"></i><?php echo $location; ?></li>
			<li>Salary Scale: <?php echo $job; ?></li>
		</ul>
	</div>
</div>
<div class="items-link items-link2 f-right">
	<a href="javascript:void(0);" id="btnIvan" data-id="<?php echo $id;?>">More</a>
	<span><?php echo $date; ?></span>
</div>
</div>
<?php $c++; } ?> 
