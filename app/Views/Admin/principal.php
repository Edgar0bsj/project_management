<?php //Esse código diz pro vscode para reconhecer o $this

/**
 * @var CodeIgniter\View\View $this
 */
?>
<?=$this->extend('Templates/base_admin');?>
<!------TITULO---------->
<?= $this->section('title')?>
<?= $title ?>
<?= $this->endSection()?>
<!------/TITULO---------->

<!------STYLE------>
<?= $this->section('style')?>
<?= $this->endSection()?>
<!------/STYLE------>

<!------MAIN------->
<?= $this->section('main')?>

<H1>ESTA DENTRO</H1>









<?= $this->endSection()?>
<!------/MAIN------->
