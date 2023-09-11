<div class="col-lg-9">
    <div class="px-lg-4">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="v-pills-bill-info"
                role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                <div>
                    <h5>Jenis Microsite</h5>
                    <p class="text-muted">Pilih jenis microsite yang cocok dengan
                        kebutuhan Anda!</p>
                </div>
                <div class="row">
                    @foreach ($data as $microsite)
                        <div class="col-xl-4 col-sm-6 mb-4">
                            <div class="card clickable-card" data-microsite-id="{{ $microsite->id }}">
                                <div class="text-center">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn"
                                            href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                    <strong
                                        class="fs-md text-muted mb-0">{{ $microsite->name }}</strong>
                                </div>
                                <div>
                                    <img src="{{ asset('component/' . $microsite->cover_img) }}"
                                        alt=""
                                        class="card-img-top profile-wid-img object-fit-cover"
                                        style="height: 200px;">
                                </div>
                                <div class="card-body pt-0 mt-n5">
                                    <div class="text-center">
                                        <div
                                            class="profile-user position-relative d-inline-block mx-auto">
                                            <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/default.jpg') }}"
                                                alt=""
                                                class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                        </div>
                                    </div>
                                    <div class="radio-button">

                                        <div class="profile-user position-relative d-inline-block mx-auto">
                                            <input type="hidden" id="tema{{ $microsite->id }}" name="microsite_selection" value="{{ $microsite->id }}" class="hidden-radio">
                                            <label for="tema{{ $microsite->id }}">{{ $microsite->name }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button"
                        class="btn btn-success btn-label right ms-auto nexttab nexttab"
                        data-nexttab="v-pills-bill-address-tab"><i
                            class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Selanjutnya</button>
                </div>
            </div>
            <!-- end tab pane -->
            <div class="tab-pane fade" id="v-pills-bill-address" role="tabpanel"
                aria-labelledby="v-pills-bill-address-tab">
                <div>
                    <h5>Pilih Nama</h5>
                    <p class="text-muted">Buat nama dan link sesuai keinginan Anda!</p>
                </div>
                <div>
                    <div class="row g-2">
                        <div class="col-12">
                            <label for="address" class="form-label">Nama
                                Microsite</label>
                            <input type="text" class="form-control" id="address"
                                name="name" placeholder="aqua-link">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Tautan
                                Microsite</label>
                            <div class="input-group">
                                <button type="button"
                                    class="btn btn-danger bg-gradient">link.id/</button>
                                <input type="text" class="form-control"
                                    id="address" placeholder="aqua-link"
                                    name="link_microsite">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab"
                        data-previous="v-pills-bill-info-tab"><i
                            class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i>
                        Sebelumnya</button>
                    <button type="button"
                        class="btn btn-success btn-label right ms-auto nexttab nexttab"
                        data-nexttab="v-pills-payment-tab"><i
                            class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Selanjutnya</button>
                </div>
            </div>
            <!-- end tab pane -->
            <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                aria-labelledby="v-pills-payment-tab">
                <div>
                    <h5>Sosial Media</h5>
                    <p class="text-muted">Pilih sosial media yang sering anda gunakan!
                    </p>
                </div>
                <div class="row">
                    @foreach ($button as $data)
                    <div class="col-xl-4 col-sm-6 mb-4">
                        <div class="card" id="{{ $data->id }}">
                            <div class="card-footer text-center ">
                                <div class="d-flex align-items-center justify-content-end">
                                    <label class="mb-0 me-2 ">
                                        <input type="checkbox"
                                        name="selectedButtons[]"
                                        value="{{ $data->id }}"
                                        class="checkbox"
                                        style="display: none;">
                                    </label>
                                    <button
                                        style="background-color: {{ $data->color_hex }}; color: white;"
                                        type="button"
                                        name="button" value="{{ $data->name_button }}"
                                        class="col-xl-12 btn btn-label rounded-pill"
                                        data-button-value="{{ $data->id }}"
                                        onclick="toggleCardHover('{{ $data->id }}')">
                                        <i class="{{ $data->icon }} label-icon align-middle rounded-pill fs-lg me-2"
                                            style="color: white;"></i>
                                        {{ $data->name_button }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab"
                        data-previous="v-pills-bill-address-tab"><i
                            class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i>
                        Sebelumnya</button>
                    <button type="submit"
                        class="btn btn-success btn-label right ms-auto nexttab nexttab"
                        data-nexttab="v-pills-finish-tab" onclick="return validateForm();"><i
                            class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>
                        Submit</button>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-finish" role="tabpanel"
                aria-labelledby="v-pills-finish-tab">
                <div class="text-center pt-4 pb-2">

                    <div class="mb-4">
                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json"
                            trigger="loop" colors="primary:#0ab39c,secondary:#405189"
                            style="width:120px;height:120px"></lord-icon>
                    </div>
                    <h5>Your Order is Completed !</h5>
                    <p class="text-muted">You Will receive an order confirmation email
                        with details of your order.</p>
                </div>
            </div>
            <!-- end tab pane -->
        </div>
        <!-- end tab content -->
    </div>

</div>

atas blade bawah script

<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function validateForm() {
// Validasi langkah pertama
var micrositeSelection = document.querySelector('input[name="microsite_selection"]:checked');
if (!micrositeSelection) {
Swal.fire({
text: 'Silakan pilih jenis microsite yang cocok dengan kebutuhan Anda!',
onClose: function () {
// Mengarahkan kembali ke halaman awal tab
document.getElementById('v-pills-bill-info-tab').click();
}
}).then(function () {
setTimeout(function () {
location.reload(); // Memuat ulang halaman setelah pengguna menekan "OK"
}, 0);
});
return false;
}

// Validasi langkah kedua
var micrositeName = document.getElementById("address").value;
var micrositeLink = document.getElementById("address").value;
if (micrositeName.trim() === "" || micrositeLink.trim() === "") {
Swal.fire({
text: 'Silakan isi nama dan tautan microsite sesuai keinginan Anda!',
onClose: function () {
// Mengarahkan kembali ke halaman awal tab
document.getElementById('v-pills-bill-info-tab').click();
}
}).then(function () {
setTimeout(function () {
location.reload(); // Memuat ulang halaman setelah pengguna menekan "OK"
}, 0);
});
return false;
}

// Validasi langkah ketiga
var selectedButtons = document.querySelectorAll('input[name="selectedButtons[]"]:checked');
if (selectedButtons.length === 0) {
Swal.fire({
text: 'Silakan pilih setidaknya satu sosial media!',
onClose: function () {
// Mengarahkan kembali ke halaman awal tab
document.getElementById('v-pills-bill-info-tab').click();
}
}).then(function () {
setTimeout(function () {
location.reload(); // Memuat ulang halaman setelah pengguna menekan "OK"
}, 0);
});
return false;
}

// Semua input telah valid, lanjutkan dengan menyimpan data
// ...

return true;
}
</script>