<div class="filter-container">
    <label for="filter">Filter:</label>
    <select name="filter" id="filter">
        <option value="all">Bulan</option>
        <option value="in">Agustus</option>
    </select>
    <select name="tahun" id="tahun">
        <option value="all">Tahun</option>
        <option value="in">2023</option>
    </select>
    <select name="guru" id="guru">
        <option value="all">Nama Guru</option>
        <option value="in">Yosep (2160001)</option>
    </select>
    <button type="button" onclick="applyFilter()">Terapkan</button>
</div>
<div class="card-body">
    <div>
        <div class="table-responsive table-card mb-1">
            <table class="table align-middle">
                <thead class="table-light text-muted">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Absensi</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Lama Mengajar</th>
                    </tr>
                </thead>
                <tbody>
                        <td>1</td>
                        <td>1 Agustus 2023</td>
                        <td>10.00</td>
                        <td>16.00</td>
                        <td>6 jam</td>
                </tbody>
                <tbody>
                        <td>2</td>
                        <td>2 Agustus 2023</td>
                        <td>16.00</td>
                        <td>18.00</td>
                        <td>2 jam</td>
                </tbody>
                <tbody>
                        <td>3</td>
                        <td>3 Agustus 2023</td>
                        <td>12.00</td>
                        <td>16.00</td>
                        <td>4 jam</td>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer">

</div>

