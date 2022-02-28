
	<ul class="cat-lists">
		<!-- 投稿されているBLOGの全てを表示 -->
		<li class="cat-list"><a href="/column/" style="color:#028bb2;">全て</a></li>
		<!-- 実際に投稿されているカテゴリーを表示する -->
		<?php
			$categories = get_categories();
			$category_id = get_queried_object_id();
			foreach( $categories as $category ){
			if($category_id === $category->term_id) {
				$navcurrent = 'current';
				} else {
				$navcurrent = '';
				}
				echo '<li class="cat-list"><a href="' . get_category_link( $category->term_id ) .'" class="'.$navcurrent. '">' . $category->name . '</a></li> ';
			}
		?>
	</ul>