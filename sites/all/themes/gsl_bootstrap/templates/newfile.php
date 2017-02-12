<div id="views-bootstrap-tab-<?php print $id ?>" class="<?php print $classes ?>">
<?php dpm($view);?>
  <ul class="nav nav-tabs-container nav-<?php print $tab_type?> <?php if ($justified) print 'nav-justified' ?>">
    <?php $previous_tab = "";$add_tab_pane = array();?>
    <?php foreach ($tabs as $key => $tab): ?>
    <?php $add_tab_pane[$key] = false?>
    <?php if($tab !== $previous_tab ):?>
          <?php if((isset($view->args[1])) && ($view->args[1] === $tab)): ?>
           <li class="active"> 
          <?php elseif ($key === 0): ?>
            <li class="active">
          <?php else: ?>
            <li class="">
          <?php endif; ?>
       <a href="#tab-<?php print "{$id}-{$key}" ?>" data-toggle="tab"><?php print $tab ?></a>
     </li>
     <?php $add_tab_pane[$key] = true;?>
     <?php endif;?>
     <?php $previous_tab = $tab?>
    <?php endforeach ?>
  </ul>
  <div class="tab-content">
  
    <?php foreach ($rows as $key => $row): ?>
   
    <?php if($add_tab_pane[$key]):?>
     <?php if ($key !== 0) print '</div>'?>
       <?php print '<div class="tab-pane'?> <?php if ($key === 0) print 'active'?><?php print '" id="tab-'?><?php print "{$id}-{$key}" ?><?php print'">'?>    
     <?php endif?>
     
        <?php print $row ?>
      
    <?php endforeach ?>
    </div>
  </div>
</div>


