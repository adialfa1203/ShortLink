@extends('layout.admin.app')
@section('title', 'Sosial')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-4">
                    <a class="btn btn-success btn-label" href="{{ route('create.button') }}" role="button">
                        <i class="ri-add-line label-icon align-middle fs-lg"></i>Tambah Sosial
                    </a>
                </div>
            </div>

            <div class="row mt-4">
                @if ($button->isEmpty())
                    <div class="card page-content">
                        <div class="container-fluid">
                            <div class="d-flex flex-column align-items-center">
                                <img style="width: 300px; height: 300px;" src="{{ asset('images/Empty.jpg') }}"
                                    alt="Gambar">
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <i class="ph-magnifying-glass fs-2 text-primary"></i>
                                    <h5 class="mt-2">Maaf! Tidak Ada Data Ditemukan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($button as $data)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-footer text-center">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i
                                                    class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item"
                                                href="{{ route('edit.button', ['id' => $data->id]) }}">Edit</a>
                                            <button type="button" class="dropdown-item delete-button"
                                                data-id="{{ $data->id }}">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button style="background-color: {{ $data->color_hex }}; color: white;" type="button"
                                        class="col-xl-12 col-12 btn btn-label rounded-pill" data-bs-toggle="collapse"
                                        data-bs-target="{{ $data->id }}" aria-expanded="true"
                                        aria-controls="{{ $data->id }}">
                                        <i class="{{ $data->icon }} label-icon align-middle rounded-pill fs-lg me-2"
                                            style="color: white;"></i>
                                        {{ $data->name_button }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                confirmDelete(id);
            });
        });

        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Tindakan ini tidak dapat dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'Data telah dihapus.',
                        'success'
                    ).then(() => {
                        window.location.href = '/delete-button/' + id;
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Dibatalkan',
                        'Data tetap aman :)',
                        'error'
                    );
                }
            });
        }
    </script>

@endsection
