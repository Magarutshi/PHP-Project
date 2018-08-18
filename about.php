<?php
require_once 'app/helpers.php';
sess_start('digg');
$page_title = 'About us';
?>

<?php include 'tpl/header.php'; ?>
<main style="min-height: 800px;">
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-12">
        <h1>- About digg social media -</h1>
        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, perferendis, ullam quos commodi ipsum iure quas illum ad alias animi sit distinctio praesentium dolor adipisci molestias aliquam iusto. Dolore, pariatur!</p>
      </div>
    </div>
  </div>
</main>
<?php include 'tpl/footer.php'; ?>