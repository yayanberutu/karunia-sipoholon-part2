<x-app-layout title="Toilet">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Tambah Toilet</h4>
        </div>
    </div>
    <form id="form_input" method="POST" action="{{ route('admin.toilet.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">No Kamar</label>
                    <input type="text" name="title" class="form-control" placeholder="Toilet Name">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Masukkan Price">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Stok</label>
                        <input type="number" name="stock" class="form-control" placeholder="Masukkan Stok">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gambar</label>
                        <input type="file" name="cover" class="form-control" placeholder="Masukkan Gambar">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <a class="btn btn-light" href="javascript:;" onclick="load_list(1);">Kembali</a>

                        <button class="btn btn-primary me-3" type="submit">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @section('custom_js')
        <script src="{{ asset('js/FormControls.js') }}"></script>
        <script>
            const btnSubmit = document.querySelector('button[type="submit"]');
            const formEl = $('#form_input');
            btnSubmit.addEventListener('click', function(e) {
                e.preventDefault();
                KTFormControls.onSubmitForm(formEl);
            });
        </script>
    @endsection
</x-app-layout>
