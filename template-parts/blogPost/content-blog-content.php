<section class="singleBlog-title">
    <h1><?php echo $postTitle; ?></h1>
    <div>
        <p class="singleBlog-tag"><?php echo showTags($postTags); ?></p>
        <p class="singleBlog-date"><?php echo $postDate ?></p>
    </div>
</section>

<section class="singleBlog-contents"><?php echo $postContent; ?></section>
