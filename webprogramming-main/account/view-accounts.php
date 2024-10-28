<?php
require_once '../account/auth.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Accounts</h4>
            </div>
        </div>
    </div>
    <div class="modal-container"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php
                        require_once '../classes/account.class.php';
                        $accountObj = new Account();
                    ?>
                    
                    <div class="table-responsive">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>first_name</th>
                                    <th>last_name</th>
                                    <th>role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $array = $accountObj->showAll();
                                foreach ($array as $arr) {
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= $arr['first_name'] ?></td>
                                        <td><?= $arr['last_name'] ?></td>
                                        <td><?= $arr['role'] ?></td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
