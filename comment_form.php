
    <div class="text-center">
      <h4>Leave a Comment</h4>
    </div>
      <?php
      $fields = array(
        'author' =>
          '<input id="author" name="author" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) .
          '" size="30"' . $aria_req . ' />',

        'email' =>
          '<input id="email" name="email" type="text" placeholder="your@email.com" value="' . esc_attr(  $commenter['comment_author_email'] ) .
          '" size="30"' . $aria_req . ' />',

        'url' =>
          '<input id="url" name="url" type="text" placeholder="Website" value="' . esc_attr( $commenter['comment_author_url'] ) .
          '" size="30" />'
        );
      $myargs = array(
        'title_reply_before'       => '<h4 id="reply-title" class="comment-reply-title">',
        'title_reply_after'        => '</h4>',
        'id_form'           => 'commentform',
        'class_form'      => 'comment-form',
        'id_submit'         => 'submit',
        'class_submit'      => 'submit button round expanded',
        'name_submit'       => 'submit',
        'title_reply'       => '',
        'title_reply_to'    => __( 'Reply to %s' ),
        'cancel_reply_link' => __( 'Cancel Reply' ),
        'cancel_reply_before' => '<span class="cancel-reply">',
        'cancel_reply_after' => '</span>',
        'label_submit'      => __( 'Comment' ),
        'comment_notes_before' => '',
        'comment_field' =>  '<textarea id="comment" name="comment" placeholder="Your comment here" cols="45" rows="8"' . $aria_req . '></textarea>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields )
      );
      comment_form($myargs);
      ?>
