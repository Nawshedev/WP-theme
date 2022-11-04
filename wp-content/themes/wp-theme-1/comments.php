<div class="comments-wrapper">


    <div class="comments" id="comments">


        <div class="comments-header">

            <h2 class="comment-reply-title">
                <?php
                if (!have_comments()) {
                    echo "Laisser un commentaire";
                } else {
                    $get_comments_number = get_comments_number();
                    if ($get_comments_number > 1) {
                        echo get_comments_number() . ' commentaires';
                    } else {
                        echo get_comments_number() . ' commentaire';
                    }
                }
                ?>

            </h2><!-- .comments-title -->

        </div><!-- .comments-header -->

        <div class="comments-inner">

            <?php wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div',
                )

            );
            ?>


        </div><!-- comments -->

        <hr class="" aria-hidden="true">
        <?php
        if (comments_open()) {
            comment_form(
                array(
                    'class-form' => '',
                    'title_reply-before' => '<h2 id="reply-title class="comment-reply-title">',
                    'title_reply_after' => '</h2>',
                )
            );
        }
        ?>

    </div>