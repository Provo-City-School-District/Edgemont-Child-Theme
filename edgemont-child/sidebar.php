<aside id="mainSidebar">
	<img src="https://edgemont.provo.edu/wp-content/uploads/2021/12/BES-Public-2022_Badge-Elementary-Public-2022.png" class="center" alt="Best Elementary Schools by US News Badge" />
			<section class="calendar-agenda">
				<h1>Today’s Events</h1>
				<?php echo do_shortcode('[calendar id="172"]'); ?>
				<a href="<?php echo get_home_url(); ?>/school-information/calendar/">View All School Events Calendar</a>
			</section>
			<section>
				<h1>Parent Resources</h1>
				<ul class="imagelist">
					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
							<span>PowerSchool (Grades & Attendance)</span>
						</a>
					</li>
					<li>
						<a href="https://canvas.provo.edu">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pcsd-canvas-logo-white.png" alt="" />
							<span>Canvas Login</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/study-at-home/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/study-at-home.svg" alt="" />
							<span>Study At Home</span>
						</a>
					</li>

					<li>
						<a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Classrooms</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/all-events-calendar/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/all-events-calendar.svg" alt="" />
							<span>All Events Calendar</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/pta/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pta-lt.svg" alt="" />
							<span>PTA</span>
						</a>
					</li>
					<?php
					//calls in the child nutrition sidebar menu
					$cnmenuhandle = curl_init();
					$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu-sidebar.php";
					// Set the url
					curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
					// Set the result output to be a string.
					curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
					$cnmenuoutput = curl_exec($cnmenuhandle);
					// close the curl connection
					curl_close($cnmenuhandle);
					echo $cnmenuoutput;
					//end child nutrition sidebar menu
					?>
				</ul>
				<a href="https://www.peachjar.com/index.php?region=33067&a=28&b=138"><img src="https://edgemont.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
				<a href="https://safeut.med.utah.edu/"><img src="https://edgemont.provo.edu/wp-content/uploads/2019/02/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
								<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>

			</section>
		</aside>
