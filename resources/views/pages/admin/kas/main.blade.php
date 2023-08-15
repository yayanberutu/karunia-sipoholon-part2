<x-app-layout title="Data Pemesanan">
    <div id="content_list">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Kas</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row g-4">
                    <div class="col-sm justify-content-sm-start">
                            <div class="d-flex">
                                <div class="ms-2">
                                    <label for="start_date" class="form-label">Start Date:</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control">
                                </div>
                                <div class="ms-2">
                                    <label for="end_date" class="form-label">End Date:</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control">
                                </div>
                                <div class="ms-2">
                                    <button class="btn btn-md btn-info" onclick="exportPdf()">Ekspor PDF</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <form id="content_filter">
                                        <input type="text" name="keyword" onkeyup="load_list(1);"
                                            class="form-control" placeholder="Cari Data Pesanan...">
                                        <i class="ri-search-line search-icon"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="list_result"></div>
            </div>
        </div>
    </div>
    <div id="content_detail"></div>
    @section('custom_js')
        <script>
            function exportPdf() {
                const startDate = document.getElementById('start_date').value;
                const endDate = document.getElementById('end_date').value;

                // Modify the PDF export URL to include start date and end date as query parameters
                const pdfUrl = `{{ route('admin.kas.pdf') }}?start_date=${startDate}&end_date=${endDate}`;

                // Open the PDF export URL in a new tab
                window.open(pdfUrl, '_blank');
            }
            load_list(1);
        </script>
    @endsection
</x-app-layout>
