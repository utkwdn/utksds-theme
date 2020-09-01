

<?php
	if(function_exists('bcn_display') && !is_front_page())
    { ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
  <?php
    bcn_display();
    ?>
    </li>
  </ol>
</nav>
    <?php
    };
?>