
			<div id="right_contant">
				<h2>Welcome : <?php echo $this->session->userdata("name");?></h2>
				<h3>Your Profile</h3>
				<?php
				$data=$user->row_array();
				// print_r($data);
				?>
				<table align="center" width="300">
					<tr>
						<td>Full Name</td>
						<td><?php echo $data['full_name']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $data['username']; ?></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><?php echo $data['contact']; ?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $data['gender']; ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data['address']; ?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><?php echo $data['city']; ?></td>
					</tr>

				</table>
				<a href="<?php echo site_url('user/change_profile');?>">Change</a>
			</div>
			<div id="left_contant">
				<h2>SEO FEATURES</h2>
				<ul>
					<li><a href="">Link Bulioding</a></li>
					<li><a href="">Reeporting</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Meta Tag</a></li>
					<li><a href="">Internet Marketing</a></li>
					<li><a href="">Sample Press Releaso</a></li>
				</ul>
			</div>
			<div id="bottom_contant">
				<ul>
					<li><a href="">Solution</a></li>
					<li><a href="">Building</a></li>
					<li><a href="">Management</a></li>
					<li><a href="">Maintance</a></li>
					<li><a href="">Maintance</a></li>
				</ul>
			</div>
		</div>
	</div>

	