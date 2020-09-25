<section class="section opinion-section" data-before="OTHERS SAID">
    <div class="opinionComment-container">

        <?php
        $comments = get_comments(array(
            'post_id' => $post->ID,
            'status' => 'approve'
        ));
        wp_list_comments(array(
            'per_page' => 15,
            'avatar_size' => 0
        ), $comments);
        ?>


        <div class="opinionComment">
            <div class="opinion">
                <div class="opinion-header">
                    <p class="opinion-writer">
                        <span class="opinion-writer-name">Kevin Shervanski</span>
                        said
                    </p>
                    <a href="javascript:void(0)" class="btn btn-blue opinionReply-btn">Reply</a>
                </div>
                <p class="opinion-text">
                    I think you said so bullshit! it’s not true at all!
                    obviously you even did not explain the problem for yourself
                    correctly and now you think you can make decissions about
                    it!
                </p>
            </div>
            <div class="opinion-answers">
                <div class="opinion">
                    <div class="opinion-header">
                        <p class="opinion-writer">
                            <span class="opinion-writer-name">admin</span>
                            said
                        </p>
                        <a href="javascript:void(0)" class="btn btn-blue opinionReply-btn">Reply</a>
                    </div>
                    <p class="opinion-text">
                        you better go and put your door daddy! you are such a
                        water fatty person and don’t know anything about web and
                        dev. go fuck yourself and let us be in our mood mother
                        father!
                    </p>
                </div>
            </div>
        </div>
        <div class="opinionComment">
            <div class="opinion">
                <div class="opinion-header">
                    <p class="opinion-writer">
                        <span class="opinion-writer-name">Kevin Shervanski</span>
                        said
                    </p>
                    <a href="javascript:void(0)" class="btn btn-blue opinionReply-btn">Reply</a>
                </div>
                <p class="opinion-text">
                    I think you said so bullshit! it’s not true at all!
                    obviously you even did not explain the problem for yourself
                    correctly and now you think you can make decissions about
                    it!
                </p>
            </div>
            <div class="opinion-answers"></div>
        </div>
        <div class="opinionComment">
            <div class="opinion">
                <div class="opinion-header">
                    <p class="opinion-writer">
                        <span class="opinion-writer-name">Kevin Shervanski</span>
                        said
                    </p>
                    <a href="javascript:void(0)" class="btn btn-blue opinionReply-btn">Reply</a>
                </div>
                <p class="opinion-text">
                    I think you said so bullshit! it’s not true at all!
                    obviously you even did not explain the problem for yourself
                    correctly and now you think you can make decissions about
                    it!
                </p>
            </div>
            <div class="opinion-answers"></div>
        </div>
        <div class="opinionComment">
            <div class="opinion">
                <div class="opinion-header">
                    <p class="opinion-writer">
                        <span class="opinion-writer-name">Kevin Shervanski</span>
                        said
                    </p>
                    <a href="javascript:void(0)" class="btn btn-blue opinionReply-btn">Reply</a>
                </div>
                <p class="opinion-text">
                    I think you said so bullshit! it’s not true at all!
                    obviously you even did not explain the problem for yourself
                    correctly and now you think you can make decissions about
                    it!
                </p>
            </div>
            <div class="opinion-answers"></div>
        </div>
    </div>
</section>