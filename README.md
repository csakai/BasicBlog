A very basic blog using CakePHP by Chris Sakai https://www.github.com/csakai
Implemented as of 9/19/2013 4:31 AM:
-Database Table for posts
-ability to add, edit, delete posts
-routing of root to posts index

To be implemented:
Comments (Add, Edit, Delete)
Tagging (optional)

As of 9/20/2013 3:11 PM:
-rebuilt application using proper relationals and cake bake
-ability to add, edit, delete posts
-routing of root to posts index
-ability to add, edit, delete comments
-comments are associated with one post, but we want to make it so  you can only comment to the post whose new comment link you follow, and not to ANY post.

As of 9/20/2013 5:22 PM:
-made it so that comments are only associated with one post and can only be made from "view post".
-post_id definition for a comment is implicit
-list and view views are not linked to for comments. They can only be viewed when viewing the post they were made in response to.