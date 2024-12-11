<h1>Balance's Dashboard</h1>
<div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Pemasukan</h5>
                <p class="card-text">Rp. 100.000.000</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Total Pengeluaran</h5>
                <p class="card-text">Rp. 50.000.000</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title">Saldo Saat Ini</h5>
                <p class="card-text">Rp. 50.000.000</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Grafik Pemasukan & Pengeluaran</div>
            <div class="card-body">
                <canvas id="financeChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Cash Account -->
    <div style="float: right; width: 250px">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cash Account</th>
                        <th scope="col">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dompet</td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td>BCA</td>
                        <td>500,000</td>
                    </tr>
                    <tr>
                        <td>Gopay</td>
                        <td>150,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>