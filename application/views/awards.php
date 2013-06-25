<div id="main-title"><h3>Yayhooray Top Awards!</h3></div>

<div id="awards">
	<div class="award_content">

		<ul>
			<li>
				<h2>Most Titlebar Edits: </h2>
				<?php foreach($most_titlebar_edits as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['title_edits'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>
			</li>
			<li>
				<h2>Most Posts</h2>
				<?php foreach($most_posts as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['most_comments'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>

			</li>
			<li>
				<h2>Most buddies</h2>
				<?php foreach($most_buddies as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['most_buddies'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>
			</li>
			<li>
				<h2>Most Enemies</h2>
				<?php foreach($most_enemies as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['most_enemies'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>
			</li>
			<li>
				<h2>Most Threads</h2>
				<?php foreach($most_threads as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['most_threads'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>
			</li>
			<li>
				<h2>Most Popular Threads</h2>
				<?php foreach($most_popular_threads as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['most_favorited_threads'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>
			</li>
			
			<li>
				<h2>Most Hidden Threads</h2>
				<?php foreach($most_hidden_threads as $key=> $val) : ?>
					<?php echo $key+1 ?>) <?php echo $val['most_hidden_threads'] ?> - <a href="user/<?php echo $val['username'] ?>"><?php echo $val['username'] ?></a><br/>
				<?php endforeach; ?>
			</li>
			<li>
				<h2>Most Cunts!</h2>
				<?php foreach($most_cunts as $cunty_user=>$cunt_number): ?>
					<a href="user/<?php echo $val['username'] ?>"><?php echo $cunty_user ?></a> - number of cunts <?php echo $cunt_number ?><br/>
				<?php endforeach; ?>
			</li>


			

		</ul>
	</div>
</div>
<div>

