<div class="card-body">
    <div>
        <div class="table-responsive table-card mb-1">
            <table class="table align-middle">
                <thead class="table-light text-muted">
                    <tr>
                        <th>No</th>
                        <th>Id Kas</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Kas Keluar/Masuk</th>
                        <th>Jumlah</th>
                        <th>Sumber Kas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->inout_date }}</td>
                            <td>
                                @if ($item->in_out === 'in')
                                    <button class="btn btn-success">MASUK</button>
                                @elseif ($item->in_out === 'out')
                                    <button class="btn btn-danger">KELUAR</button>
                                @endif
                            </td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->transaction_type }}</td>
                            <td>
                                <ul class="list-inline hstack gap-2 mb-0">
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="{{ route('admin.kas.show', $item->id) }}"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="{{ route('admin.kas.edit', $item->id) }}"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-pencil-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Remove">
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{ route('admin.kas.destroy', $item->id) }}');"
                                            class="text-danger d-inline-block remove-item-btn">
                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

