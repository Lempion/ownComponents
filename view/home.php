<?php
$notes = $queryBuilder->getAll('notes');
?>
<?php if ($_SESSION['ANSWER']): ?>
    <div class="alert alert-<?php echo $_SESSION['ANSWER']['type'] ? 'success' : 'danger'; ?> container px-4 text-center"
         role="alert">
        <?php echo $_SESSION['ANSWER']['message']; ?>
    </div>
<?php unset($_SESSION['ANSWER']); endif; ?>
<div class="container px-4 py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <?php foreach ($notes as $key => $dataNote): ?>
            <div class="col d-flex align-items-start flex-column">
                <div>
                    <h4 class="fw-bold mb-0"><?php echo $dataNote['title']; ?></h4>
                    <p><?php echo $dataNote['text']; ?></p>
                </div>
                <div>
                    <a type="button" class="btn btn-warning" href="/edit/<?php echo $dataNote['id']; ?>">Изменить</a>
                    <a type="button" class="btn btn-danger" href="/remove/<?php echo $dataNote['id']; ?>">Удалить</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>