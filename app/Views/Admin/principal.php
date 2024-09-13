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
                    <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>tiger@azmail.com</td>
                        <td>(21) 912345678</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>









<?= $this->endSection() ?>
<!------/MAIN------->

<!------SCRIPT------->
<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="<?= site_url('dashboard/js/scripts.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="<?= site_url('dashboard/js') ?>/datatables-simple-demo.js"></script>
<?= $this->endSection() ?>
<!------/SCRIPT------->