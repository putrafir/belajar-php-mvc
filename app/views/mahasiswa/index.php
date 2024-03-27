<div class="container mt-5">
    <div class="col-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item list-group-item-action d-flex justify-content-between">
                    <?= $mhs['nama'] ?>
                    <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary  ">detail</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>