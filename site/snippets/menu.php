<ul class="nav navbar-nav navbar-right">
  <?php foreach($pages->visible() as $p): ?>
  <li>
    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
  </li>
  <?php endforeach ?>
  <li>
    <a class="icon-link" href="http://instagram.com/aunderw00d" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g><path style="" d="M49.994,42.355c-5.764,0-10.451,4.695-10.451,10.455c0,5.769,4.688,10.456,10.451,10.456   c5.771,0,10.459-4.688,10.459-10.456C60.453,47.051,55.766,42.355,49.994,42.355z M48.09,54.365c-1.904,0-3.463-1.555-3.463-3.462   c0-1.905,1.559-3.459,3.463-3.459c1.912,0,3.463,1.555,3.463,3.459C51.553,52.811,50.002,54.365,48.09,54.365z" fill="#010101"></path><path style="" d="M92.395,10.589H7.605v78.822h84.789V10.589z M19.266,17.518h13.568v3.396H19.266V17.518z    M14.391,25.258h23.453l1.982-7.885h45.781v14.948H14.391V25.258z M65.539,52.811c0,8.587-6.955,15.54-15.545,15.54   c-8.574,0-15.543-6.953-15.543-15.54c0-8.578,6.969-15.532,15.543-15.532C58.584,37.278,65.539,44.232,65.539,52.811z    M85.607,82.627H14.391v-9.326h71.217V82.627z" fill="#010101"></path></g></svg>
    </a>
  </li>
</ul>
