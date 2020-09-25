<section class="section postComment-container" data-before="TALK TO US">

<?php


$fields = array(
    'author' =>
        '
                        <input 
                        class="postComment-input"
                        type="text"
                        placeholder="Your name"
                        name="author"
                        id="author"
                        value="' . esc_attr($commenter ['comment_author']) . ' ' . $aria_req . '"
                        />
                        ',
    'email' =>
        '
                        <input 
                        class="postComment-input"
                        type="email"
                        placeholder="Your email"
                        name="email"
                        id="email"
                        value="' . esc_attr($commenter ['comment_author_email']) . ' ' . $aria_req . '"
                        />
                        '
);

$args = array(
    'title_reply_before' => '<div class="postComment-header">
                        <p class="postComment-title">',
    'title_reply_after' => '</p>',
    'title_reply' => 'Share Your Thoughts',
    'fields' => $fields,
    'comment_field' => '
                    <textarea name="comment" id="comment" class="postComment-input" aria-required="true"
                                  cols="30" rows="10"
                                  placeholder="Your message to us, feel free to talk about your project"></textarea>
                    ',

    'class_container' => 'postComment-container',
    'class_form' => 'postComment-form',
    'class_submit' => 'btn btn-pink postComment-btn',
    'label_submit' => 'Send Message',
    'comment_notes_before' => '<p class="postComment-desc">
                            We’d love to discuss about your ideas about this article, let’s
                            talk about it ;)
                        </p>'
);
comment_form($args);
?>