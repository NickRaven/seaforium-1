<?php

class Statistics_dal extends Model
{
  function fetch_titlebar_edits() { 
  		$titlebar_edits = $this->db->query("SELECT 
			        COUNT(title_id) as title_edits,
			        `users`.`username`

				FROM `titles`, `users`

	
			        
			WHERE 1
      AND `titles`.`author_id` = `users`.`id`
			GROUP BY `users`.`id`
			ORDER BY title_edits DESC
			LIMIT 10

		");
		return $titlebar_edits->result_array();
  }

  function fetch_most_posts() { 
  	$most_posts = $this->db->query("SELECT 
        COUNT(comment_id) as most_comments,
        `users`.`username`

		FROM `comments` , `users`

		
	  
		WHERE 1
    AND  `comments`.`user_id` = `users`.`id`
		GROUP BY `users`.`id`
		ORDER BY most_comments DESC
		LIMIT 10
  	");

  		return $most_posts->result_array();
  }

  function fetch_most_active_threads() { 
  	$most_posts = $this->db->query("SELECT 
        COUNT(comment_id) as most_comments,
        `users`.`username`

		FROM `comments`, `users`

		
	  
		WHERE 1
    AND  `comments`.`user_id` = `users`.`id`
		GROUP BY `users`.`id`
		ORDER BY most_comments DESC
		LIMIT 10
  	");

  		return $most_posts->result_array();
  }

  function fetch_most_loved() { 
  		$most_loved = $this->db->query("SELECT 
        COUNT(acq_id) as most_buddies,
        `users`.`username`

			FROM `acquaintances` as aq, `users`

			
		       

		WHERE aq.type = 1
    AND  `aq`.`acq_user_id` = `users`.`id`
		GROUP BY `users`.`id`

		ORDER BY most_buddies DESC

		LIMIT 10


  		");
  		return $most_loved->result_array();
  }

  function fetch_most_ignored() {
  		$most_ignored = $this->db->query("SELECT 
        COUNT(acq_id) as most_enemies,
        `users`.`username`

			FROM `acquaintances` as aq, `users`

			
		       

		WHERE aq.type = 2

    AND  `aq`.`acq_user_id` = `users`.`id`

		GROUP BY `users`.`id`

		ORDER BY most_enemies DESC

		LIMIT 10


  		");
  		return $most_ignored->result_array();
  }

  function fetch_most_posted_threads() { 
  		$most_posted_threads = $this->db->query("SELECT 
        COUNT(thread_id) as most_threads,
        `users`.`username`

			FROM `threads`, `users`

		       

		WHERE 1

    AND  `threads`.`user_id` = `users`.`id`

		GROUP BY `users`.`id`

		ORDER BY most_threads DESC

		LIMIT 10

		");
  		return $most_posted_threads->result_array();
  }

  function fetch_most_popular_threads() { 
  		$most_popular_threads = $this->db->query("SELECT 
        COUNT(`favorites`.`favorite_id`) as most_favorited_threads,
        `users`.`username`

			FROM `favorites`, `threads`, `users`

		WHERE 1

    AND `threads`.`thread_id` = `favorites`.`thread_id`

    AND `threads`.`user_id` = `users`.`id`

		GROUP BY `users`.`id`

		ORDER BY most_favorited_threads DESC

		LIMIT 10");
  		return $most_popular_threads->result_array();
  }

  function fetch_most_hidden_threads() { 
  		$most_hidden_threads = $this->db->query("SELECT 
        COUNT(`hidden_threads`.`thread_id`) as most_hidden_threads,
        `users`.`username`

				FROM `hidden_threads`, `threads`, `users`
			     
			WHERE 1
      AND `threads`.`thread_id` = `hidden_threads`.`thread_id`
      AND `threads`.`user_id` = `users`.`id`

			GROUP BY `users`.`id`

			ORDER BY most_hidden_threads DESC

			LIMIT 10
  		");
  		return $most_hidden_threads->result_array();
  }
  function most_cunts() {
      return array();
  		//first the inefficient way
  		$all_comments = $this->db->query("SELECT 
  				users.username, 
  				comments.content 
  			FROM 
  			`comments`, `users`

  			WHERE
  			`comments`.user_id = `users`.id ");


  		foreach($all_comments->result_array() as $key=>$val):
  			
  			$language = strip_tags($val['content']); 
  			$words = explode(" ", $language);
  			
  			foreach($words as $word):

  				if(preg_match("/cunt/", $word)):
  					@$cunt_count[$val['username']]++;
  				endif;

  			endforeach;
  		
  		endforeach;

  		arsort($cunt_count);
  		return array_slice($cunt_count, 0, 10);
  }

  /* points related */
  function most_points(){
    $result = $this->db->query("SELECT `points`, `username` FROM `users` WHERE `points` != 0 ORDER BY `points` DESC LIMIT 10");
    return $result->result_array();
  }

  function least_points(){
    $result = $this->db->query("SELECT `points`, `username` FROM `users` WHERE `points` != 0 ORDER BY `points` ASC LIMIT 10");
    return $result->result_array();
  }
   
  	
}