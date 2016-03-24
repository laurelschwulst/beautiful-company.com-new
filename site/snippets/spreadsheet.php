<div class="index-container-snippet">

  <nav class="work">
    <ul class="grid-wrap">
      <?php foreach($pages->find('i')->children()->visible()->sortBy('year')->flip() as $work): ?>
        <?php if($work->dormant() == '1'): ?>
          <li class="grid-col col-full dormant">
        <?php else: ?>
          <li class="grid-col col-full">
          <a href="<?php echo $work->url() ?>" class="grid-col col-full">
        <?php endif ?>

          <!-- TITLE -->
          <div class="title grid-value large">
            <?php echo $work->title() ?>
          </div>

          <!-- YEAR -->
          <div class="year grid-value small">
            <?php if (!$work->year()->empty()): ?>
              <?php echo $work->year() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

          <!-- TYPE -->
          <div class="type grid-value small">
            <?php if (!$work->type()->empty()): ?>
              <?php echo $work->type() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

          <!-- LINK -->
          <div class="link grid-value">
            <?php if (!$work->link()->empty()): ?>
              <?php echo $work->link() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

          <!-- CREDITS -->
          <div class="credits grid-value">
            <?php if (!$work->credits()->empty()): ?>
              <?php echo $work->credits() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

        <?php if($work->dormant() == '1'): ?>
          </li>
        <?php else: ?>
          </a></li>
        <?php endif ?>
      <?php endforeach ?>
    </ul>
  </nav>
  
  <div class="clearer"></div>

</div>