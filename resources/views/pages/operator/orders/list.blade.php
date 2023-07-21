<div class="card-body">
    <div>
        <div class="table-responsive table-card mb-1 mx-1">
            <table class="table align-middle">
                <thead class="table-light text-muted">
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        {{-- <th class="col-md-2">Alamat</th> --}}
                        {{-- <th>Pesanan</th> --}}
                        <th>No Hp</th>
                        <th>Total Harga</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                    @foreach ($pemesanan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->fullname }}</td>

                            {{-- <td class="text-capitalize">
                                {{ $item->user->address . ', ' . $item->user->city }}
                            </td>
                            <td>{{ $item->user->postal_code }}</td> --}}

                            {{-- <td>{{ $item->product->title }}</td> --}}
                            <td>{{ $item->user->phone }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                @if ($item->payment != 'Cash')
                                    <img src="{{ asset('images/bukti_pembayaran/' . $item->image) }}"
                                        class="card-img-top">
                                @else
                                    Pembayaran Cash
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 'pending')
                                    <span class="badge badge-soft-warning text-uppercase">Menunggu</span>
                                @elseif($item->status == 'accepted')
                                    <span class="badge badge-soft-success text-uppercase">Diterima</span>
                                @elseif($item->status == 'rejected')
                                    <span class="badge badge-soft-danger text-uppercase">Ditolak</span>
                                @elseif($item->status == 'completed')
                                    <span class="badge badge-soft-primary text-uppercase">Selesai</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group d-flex justify-content-center" role="group"
                                    aria-label="Basic example">
                                    <a href="javascript:;"
                                        onclick="load_detail('{{ route('operator.pemesanan.show', $item->id) }}')"
                                        class="btn btn-sm btn-primary">Detail</a>
                                    @if ($item->status == 'accepted')
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','{{ route('operator.pemesanan.finish', $item->id) }}');"
                                            class="btn btn-sm btn-danger"></i>Finish</a>
                                    @endif
                                    @if ($item->status == 'pending')
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('operator.pemesanan.accept', $item->id) }}');"
                                            class="btn btn-sm btn-success">
                                            Terima
                                        </a>
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('operator.pemesanan.reject', $item->id) }}');"
                                            class="btn btn-sm btn-danger">
                                            Tolak
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{ $pemesanan->links('theme.app.pagination') }} <br>
