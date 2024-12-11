<?php

$lgotomain = $_SESSION['lgotomain'] ?? 'Error';
$tdashboard = $_SESSION['tdashboard'] ?? 'Error';

?>

<h1>404 Not Found</h1>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">We're Sorry!</div>
            <div class="card-body">
                <h4>Halaman yang ingin anda akses sedang dalam perbaikan atau belum ada :(</h4>
                <p>Back to <a href="<?php echo $lgotomain; ?>"><?php echo htmlspecialchars($tdashboard); ?></a></p>
            </div>
        </div>
    </div>
</div>