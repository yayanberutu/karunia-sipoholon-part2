<div class="card-body">
    <div>
        <div class="table-responsive table-card mb-1">
            <table class="table align-middle">
                <thead class="table-light text-muted">
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        {{-- <th>Stok</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->price }}</td>
                            {{-- <td>{{ $item->stock }}</td> --}}
                            <td>
                                <ul class="list-inline hstack gap-2 mb-0">
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="{{ route('admin.food.show', $item->id) }}"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="{{ route('admin.food.edit', $item->id) }}"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-pencil-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Remove">
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{ route('admin.food.destroy', $item->id) }}');"
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
{{ $product->links('theme.app.pagination') }}
