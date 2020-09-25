<?php
if (post_password_required()) {
    return;
}
$args = array(
    'title_reply_before' => '<div class="postComment-header">
                        <p class="postComment-title">',
    'title_reply_after' => '</p>',
    'title_reply' => 'Share Your Thoughts',
    'comment_notes_before' => '    
        <p class="postComment-desc">
            We’d love to discuss about your ideas about this article, let’s
            talk about it ;)
        </p>
          ',
    'class_form' => "postComment-form",
    'class_submit' => "btn btn-pink postComment-btn",
    'label_submit' => "Send Message",
    'comment_field' => '<textarea name="comment" id="comment" class="postComment-input" aria-required="true"
                                  cols="30" rows="10"
                                  placeholder="Your message to us, feel free to talk about your project"></textarea>'
);
comment_form($args);
$comments = get_approved_comments(get_the_ID());
if ($comments) {
    include(locate_template('template-parts/comments/content-other-comments.php', false, false));
}
?>