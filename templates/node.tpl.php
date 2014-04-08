<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <div class="submitted">
      <?php if ($display_submitted): ?>
      <?php print $submitted; ?>
      <?php endif; ?>
    </div>
  
  <?php print render($title_prefix); ?>
  <?php if ($page): ?>
    <h1 class="title"><?php print $title; ?></h1>
  <?php else: ?>
    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>


  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
