<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "gutter": <?php echo $atts['gutter'];?>, "columnWidth": ".grid-item", "percentPosition": true }'>
        <?php
		foreach ($obj['data'] as $post) {
			/*echo '<pre>';
			print_r($post);
			echo '</pre>';*/
			$image_size = $atts['image_size'];
			$pic_text=$post['caption']['text'];
			$pic_link=$post['link'];
			$pic_like_count=$post['likes']['count'];
			$pic_comment_count=$post['comments']['count'];
			$pic_src=str_replace("http://", "https://", $post['images'][$image_size]['url']);
			$pic_created_time=date("F j, Y", $post['caption']['created_time']);
			$pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
			
			//Image Listing Start
			echo "<div class='grid-item'>";        
			echo "<a href='{$pic_link}' target='_blank'>";
				echo '<div class="insta-overlay">';
				echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='Advanced Instagram Carousel'>";
				echo "<p>"."{$pic_text}".$atts['after_caption']."</p>";
				echo '<div class="insta-image-meta">';
				echo '<i class="fa fa-heart fa-fw"></i>'.$pic_like_count.'&nbsp;&nbsp;<i class="fa fa-comment fa-fw"></i>'.$pic_comment_count;
				echo '</div>';
				echo '</div>';
			echo "</a>";
			echo "</div>";
			//Image Listing End
		}
?>
</div>