

<link rel="stylesheet" type="text/css" href="style.css">
<nav>
<ul>
<li class="menulinje"><a href="frontpage.php" <?php if ($curpage=='frontpage.php') { echo 'class="active"';}?>>Forside</a></li>
<li class="menulinje"><a href="projects.php" <?php if ($curpage=='projects.php') { echo 'class="active"';}?>>Projects</a></li>
<li class="menulinje"><a href="contact.php" <?php if ($curpage=='contact.php') { echo 'class="active"';}?>>Contact</a></li>
<li class="menulinje"><a href="login.php" <?php if ($curpage=='login.php') { echo 'class="active"';}?>>Login</a></li>
<li class="menulinje"><a href="restricted.php" <?php if ($curpage=='restricted.php') { echo 'class="active"';}?>>Hemmelig side</a></li>

</ul>

<!--man sætter if ($curpage=='phpmenu.php') { echo 'class="active"';} for at kunne få de enkelte sider til at vise hvilken der er "aktiv" -->
</nav>
<br>
<hr>

