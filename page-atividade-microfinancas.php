<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<?php include 'components/atividade-microfinancas-banner.php'; ?>

<?php include 'components/atividade-microfinancas-descricao.php'; ?>

<?php include 'components/atividade-microfinancas-galeria.php'; ?>

<?php include 'components/home-quem-somos.php'; ?>

<?php include 'components/home-blog-categorias.php'; ?>

<?php include 'components/home-newsletter.php'; ?>

<?php include 'footer.php'; ?>

<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

</body>

</html>