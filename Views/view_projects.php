<?php require_once 'view_begin.php' ?>
<link rel="stylesheet" href=<?='../content/css/projects.css' ?> >
<div class="flex">
    <?php foreach($proj as $p) : ?>
      <div class="card">
        <img src="/content/images/projects/<?= e($p['projects_id'])?>.png" class="card-img-top imgProj" alt="...">
        <div class="card-body">
          <h2 class="card-title title"><?= e($p['projects_title']) ?></h2>
          <p class="card-text"><?= e($p['projects_intr']) ?></p>
          <a href="/?controller=projects&action=project&id=<?=e($p['projects_id'])?>" class="btn btn-primary" id="<?=e($p['projects_id']) ?>">More</a>
        </div>
      </div>
  <?php endforeach ?>
</div>

<?php require_once 'view_end.php' ?>