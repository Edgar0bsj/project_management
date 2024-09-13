<?php //Esse código diz pro vscode para reconhecer o $this

/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('Templates/base_admin'); ?>
<!------TITULO---------->
<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>
<!------/TITULO---------->

<!------STYLE------>
<?= $this->section('style') ?>
<?= $this->endSection() ?>
<!------/STYLE------>

<!------MAIN------->
<?= $this->section('main') ?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Principal</h1>
    <div class="card mb-4">
        <div class="card-body">
            <P>DESCRIÇÃO</P>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Clientes
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($usuarios as $usuario):?>
                    <tr>
                        <td><?= $usuario['id']?></td>
                        <td><?= $usuario['nome']?></td>
                        <td><?= $usuario['email']?></td>
                        <td><?= $usuario['telefone']?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>









<?= $this->endSection() ?>
<!------/MAIN------->

<!------SCRIPT------->
<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="<?= site_url('dashboard/js') ?>/datatables-simple-demo.js"></script>
<?= $this->endSection() ?>
<!------/SCRIPT------->