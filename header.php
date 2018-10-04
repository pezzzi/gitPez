<div class="header">

<p class="centrar">
  <a href="index.html">
    <img id="logo" src="<?= $logo ?>" alt="logo Digital Movies">
  </a>
</p>

<?= $h1 ?>

<div id="redes">
  <ul>
    <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
    <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
    <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
    <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
  </ul>
</div>

<div>
  <ul>
    <?php
    foreach ($generos as $value) {
      echo "<li><a href=\"{$value['url']}\">{$value['nombre']}</a></li>";
    }
    ?>
  </ul>
</div>


<?= $h2 ?>

</div>
