<!DOCTYPE html>
<html lang="en">

<head>
     <title>Daftar Mahasiswa</title>
</head>

<body>
    <?php
    $programmer_php = ["Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma"];
    $programmer_python = ["Andi", "Fatma", "Fadli", "Haris", "Baco"];
    ?>

    <div class="card">
        <div class="card-header">
            <h3>Daftar mahasiswa yang masuk kelompok Programmer PHP dengan nama
                diurutkan secara Ascending</h3>
        </div>
        <ul class="list-group list-group-flush">
            <?php
            sort($programmer_php);
            foreach ($programmer_php as $php) : ?>
                <li class="list-group-item"><?= $php; ?></li>
            <?php endforeach; 
            ?>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Daftar mahasiswa yang masuk kelompok Programmer PHP dengan nama
                diurutkan secara Descending</h3>
        </div>
        <ul class="list-group list-group-flush">
            <?php
            rsort($programmer_php);
            foreach ($programmer_php as $php) : ?>
                <li class="list-group-item"><?= $php; ?></li>
            <?php endforeach; 
            ?>
        </ul>
    </div>

    <div class="card">
            <div class="card-header">
                <h3>Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak
                    termasuk kelompok Programmer Python</h3>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_diff($programmer_php, $programmer_python);
                foreach ($result as $r) : ?>
                    <li class="list-group-item"><?= $r; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak
                    termasuk kelompok Programmer PHP</h3>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_diff($programmer_python, $programmer_php);
                foreach ($result as $r) : ?>
                    <li class="list-group-item"><?= $r; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer
                    Python sekaligus</h3>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_intersect($programmer_php, $programmer_python);
                foreach ($result as $r) : ?>
                    <li class="list-group-item"><?= $r; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau
                    Programmer Python</h3>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_merge($programmer_php, $programmer_python);
                foreach ($result as $r) : ?>
                    <li class="list-group-item"><?= $r; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php array_push($programmer_php, "Azizah") ?>
        <div class="card">
            <div class="card-header">
                <h3>Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP</h3>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                foreach ($programmer_php as $prog_php) : ?>
                    <li class="list-group-item"><?= $prog_php; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

</body>

</html>