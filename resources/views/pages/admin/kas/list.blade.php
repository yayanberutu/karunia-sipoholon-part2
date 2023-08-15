<div class="filter-container">
    <label for="filter">Filter:</label>
    <select name="filter" id="filter">
        <option value="all">Semua</option>
        <option value="in">Hadir</option>
        <option value="out">Absen</option>
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
                        <th>Id Guru</th>
                        <th>Nama Guru</th>
                        <th>Status Kehadiran</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Lama Mengajar</th>
                    </tr>
                </thead>
                <tbody>
                        <td>1</td>
                        <td>21620001</td>
                        <td>Yayan Suprapto</td>
                        <td><button class="btn btn-success">Hadir</button></td>
                        <td>10.00</td>
                        <td>16.00</td>
                        <td>6 jam</td>
                </tbody>
                <tbody>
                        <td>2</td>
                        <td>21620002</td>
                        <td>Prabowo Pranowo</td>
                        <td><button class="btn btn-danger">Absen</button></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                </tbody>
                <tbody>
                        <td>3</td>
                        <td>21620003</td>
                        <td>Ahok Supratman</td>
                        <td><button class="btn btn-success">Hadir</button></td>
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

