<?php if (isset($_REQUEST['errormsg'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Vale!</h4>
        <p>Palun sisesta andmed.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container-fluid">
    <h1 class="display-5 mb-3">Tantsid</h1>
    <form action="" method="post">
        <div class="row g-2 col-sm-3 mb-3">
            <input class="form-control" type="text" id="eesnimi" name="eesnimi" placeholder="Введите ID пары" aria-label="Eesnimi" required>
            <button type="submit" name="sisestusnupp" class="btn btn-primary">Подтвердить</button>
        </div>
    </form>
</div>
