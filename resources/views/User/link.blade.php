@extends('layout.user.app')

@section('title','Link')
@section('style')
<style>
    .card-header .col-12 {
        margin-bottom: 0.25rem;
        /* Sesuaikan jarak vertikal sesuai kebutuhan */
    }

    .card-header h6,
    .card-header h5,
    .card-header p {
        margin: 0;
        /* Hapus margin bawaan */
    }

    .card-header h6 {
        margin-right: 0.5rem;
        /* Jarak kanan untuk h6 */
    }

    .isi {
        border: 2px solid #7B7B7B;
        border-radius: 10px;
        padding-top: 5px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    .card-footer {
        padding-top: 10px;
        padding-bottom: 5px;
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    /* Gaya untuk tag <a> saat cursor di atasnya */
    .garisbawah:hover {
        text-decoration: underline;
        /* Menambahkan garis bawah saat cursor di atasnya */
    }

    a:hover {
        text-decoration: underline;
        /* Menambahkan garis bawah saat cursor di atasnya */
    }
</style>
@endsection
@section('content')
    <div class="page-content">
        <div class="d-flex">
            <div class="col-4">
                <h5>Tautan yang Dihasilkan Terbaru</h5>
            </div>
            <div class=" col-8 col-sm mb-3">
                <div class="d-flex justify-content-sm-end">
                    <div class="search-box ms-2">
                        <input type="text" class="form-control search" placeholder="Search...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $i = 0;
            @endphp
            @foreach ($urlshort as $row)
                @php
                    $i++;
                @endphp
                <form action="/archive/{{ $row->id }}">
                    @csrf
                    <div class="col-lg-12">
                        <div class="card" style="border: 1px solid var(--tb-border-color-translucent); padding: 0px;" id="card{{ $row->id }}">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h6 class="col-3">{{ $row->title }}</h6>
                                    <div class=" col-9 d-flex flex-row justify-content-end">
                                        <button type="button" id="button-email" class="btn btn-primary me-3 btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#bagikan{{ $i }}"
                                            aria-haspopup="true" aria-expanded="false"><i
                                                class="fa-solid fa-share-nodes"></i> &nbsp;Bagikan</button>

                                       <!-- Modal bagikan -->
                        <div class="modal fade" id="bagikan{{$i}}" tabindex="-1" aria-labelledby="addAmountLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="countdown-input-subscribe">
                                                <label class="platform" onclick="window.open(`https://www.facebook.com/sharer/sharer.php?u=${document.getElementById('default_short_url{{$i}}').innerText}`)"><i class="bi bi-facebook"></i> &nbsp; Facebook</label>
                                            </div>
                                            <div class="countdown-input-subscribe">
                                                <label class="platform" onclick="window.open(`https://twitter.com/intent/tweet?url=${document.getElementById('default_short_url{{$i}}').innerText}`)"><i class="bi bi-twitter"></i> &nbsp; Twitter</label>
                                            </div>
                                            <div class="countdown-input-subscribe">
                                                <label class="platform" onclick="window.open(`https://api.whatsapp.com/send?text=${document.getElementById('default_short_url{{$i}}').innerText}`)"><i class="bi bi-whatsapp"></i> &nbsp; WhatsApp</label>
                                            </div>
                                            <div class="countdown-input-subscribe">
                                                <label class="platform" data-platform="copy" id="copyButton" data-url="{{ $row->default_short_url }}" data-id-copy="{{$i}}"><i class="bi bi-clipboard-fill"></i> &nbsp; Copy</label>
                                            </div>
                                            <div id="successCopyAlert" class="alert alert-success mt-3" style="display: none; position: fixed; bottom: 570px; right: 433px; max-width: 500px;">
                                                Tautan berhasil disalin ke clipboard
                                            </div>
                                            <div class="countdown-input-subscribe">
                                                <label class="platform" onclick="window.open(` https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${document.getElementById('default_short_url{{$i}}').innerText}`)"><i class="bi bi-qr-code"></i> &nbsp; QR Code</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end Modal bagikan-->
                                        <button id="clickButton" type="button" class="btn btn-light me-3 btn-sm" data-bs-toggle="modal" data-bs-target="#zoomInModal-{{ $row->id }}">
                                            <span data-bs-toggle="tooltip" data-bs-placement="left" title="Kode QR"><i class="fa-solid fa-qrcode"></i></span>
                                        </button>
                                        <button type="button" class="btn btn-light me-3 btn-sm edit-link"
                                            data-bs-toggle="modal" data-bs-target="#zoomInModal"
                                            data-link="{{ $row->url_key }}">
                                            <span><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</span>
                                        </button>
                                        <button type="button" class="btn btn-primary me-3 btn-sm"
                                            onclick="archive({{ $row->id }})"><i class="bi bi-archive-fill"></i>
                                            Arsipkan</button>
                                    </div>
                                </div>
                                <a>
                                    <h3 class="garisbawah card-title mb-2">{{ $row->default_short_url }}</h3>
                                </a>
                                <a href="{{ $row->destination_url }}"
                                    class="card-subtitle font-14 text-muted">{{ $row->destination_url }}</a>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex">
                                    <div class="d-flex col-5">
                                        <p style="margin-top: 10px;">
                                            {{ \Carbon\Carbon::parse($row->deactivated_at)->format('F j, Y, h:i A') }}</p>
                                            &nbsp
                                        <?php
                                        $deactivatedAt = \Carbon\Carbon::parse($row->deactivated_at);
                                        $now = \Carbon\Carbon::now();

                                        if ($deactivatedAt < $now) {
                                            echo '<p class="text-danger" style="margin-top: 10px;">Tautan kadaluarsa</p>';
                                        } else {
                                            echo '<p style="margin-top: 10px;"><a href="#" class="access-link">Tautan Aktif</a></p>';
                                        }
                                        ?>
                                    </div>
                                    <div class=" col-7 d-flex flex-row justify-content-end">
                                        <button type="button" class="btn btn-light  me-3 btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#TimeModal-{{$row->id}}" data-link="{{ $row->url_key }}"><span
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Tautan berbasis waktu"><i class="fa-solid fa-clock"></i>&nbsp;Atur
                                                waktu</span></button>
                                        <button type="button" class="btn btn-light me-3 btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#zoomInModal1"><span data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Tautan terlindungi"><i
                                                    class="fa-solid fa-lock"></i>&nbsp;kata sandi</span></button>
                                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="collapse"
                                            href="#collapseExample112" role="button" aria-expanded="true"
                                            aria-controls="collapseExample112">
                                            <i class="bi bi-bar-chart-line-fill"></i> statistik
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div id="zoomInModal1" class="modal fade zoomIn" tabindex="-1"
                                aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="zoomInModalLabel"><i
                                                    class="fa-solid fa-lock"></i>&nbsp;Tautan Terlindungi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body d-flex" style="background-color: #D9D9D9;">
                                                <p><i class="fa-solid fa-clock"></i></p>
                                                &nbsp;
                                                <p>Protected link adalah jenis link yang dapat diberikan Secret
                                                    key/Passphrase sebelum dialihkan ke link aslinya. </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mt-3">
                                                    <input type="text" class="form-control" id="degreeName"
                                                        placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary ">Simpan</button>
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <div id="zoomInModal-{{ $row->id }}" class="modal fade zoomIn modal-sm" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="zoomInModalLabel">Gambar Kode QR</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="visible-print text-center">
                                                {!! QrCode::size(200)->generate($row->destination_url); !!}
                                                <br>
                                                <p>{{ $row->default_short_url }}</p>

                                            </div>
                                            <!-- <center>
                                                <img src="{{asset('template/themesbrand.com/steex/layouts/assets/images/qr.png')}}" alt="" width="100%">
                                            </center> -->
                                        </div>
                                        <center>
                                            <button type="button" class="btn btn-danger">Download</button>
                                            <button type="button" class="btn btn-light  me-3"><span><i class="fa-solid fa-pen-to-square"></i>&nbsp;Ganti</span></button>
                                        </center>
                                        <div class="modal-footer"></div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <p class="d-none" id="default_short_url{{$i}}">{{$row->default_short_url}}</p>

                            <form id="formKustom">
                                <div id="zoomInModal" class="modal fade zoomIn" tabindex="-1"
                                    aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="zoomInModalLabel"><i
                                                        class="fa-solid fa-pen-to-square"></i>&nbsp;Kustom Tautan
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body d-flex" style="background-color: #D9D9D9;">
                                                    <p><i class="fa-solid fa-pen-to-square"></i></p>
                                                    &nbsp;
                                                    <p>Kustom tautan adalah fitur yang memungkinkan
                                                        pengguna untuk membuat tautan pendek yang disesuaikan dengan
                                                        keinginan mereka.
                                                        Pengguna dapat mengganti atau menentukan bagian akhir dari tautan
                                                        pendek
                                                        untuk mencerminkan kata kunci, nama merek, atau informasi yang
                                                        relevan dengan tautan tersebut.</p>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <label for="new_url_key">Kustom Nama</label>
                                                    <input type="text" class="form-control" name="new_url_key"
                                                        id="new_url_key" placeholder="Kustom nama">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button id="submitKustom" type="button"
                                                    class="btn btn-primary submitKustom">Simpan</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </form>
                            <form id="updateTime">
                                <div id="TimeModal-{{$row->id}}" class="modal fade Time" tabindex="-1"
                                    aria-labelledby="TimeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TimeModalLabel"><i
                                                        class="fa-solid fa-clock"></i>&nbsp;Atur Waktu</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" data-id="{{$row->id}}"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body d-flex" style="background-color: #D9D9D9;">
                                                    <p><i class="fa-solid fa-clock"></i></p>
                                                    &nbsp;
                                                    <p>Tautan berbasis waktu adalah jenis tautan yang hanya berlangsung
                                                        selama periode waktu tertentu.
                                                        Ketika tautan telah kedaluwarsa, maka tautan tersebut tidak dapat
                                                        diakses lagi.</p>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <label for="deactivated_at">Ubah Tanggal</label>
                                                    <input type="datetime-local" class="form-control"
                                                        name="deactivated_at" data-id="{{$row->id}}" id="deactivated_at-{{$row->id}}" q
                                                        placeholder="Ubah tanggal" data-key="{{ $row->url_key }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button id="submitTime"
                                                    data-key="{{ $row->url_key }}" data-id="{{$row->id}}" type="button"
                                                    class="btn-submit btn btn-primary submitKustom">Simpan</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </form>
                            <div class="collapse" id="collapseExample112">
                                <div class="card-footer">
                                    <div class="d-flex">
                                        <div class="col-10">
                                            <h5><i class="bi bi-bar-chart-line-fill"></i> statistik</h5>
                                        </div>
                                        <div class="col-2 d-flex flex-row justify-content-end">
                                            <button type="button" class="btn btn-light "><span>Lihat
                                                    Detail</span>&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div id="chart"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
            <!-- end col -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- container-fluid -->
</div>

@section('script')
<script>
    var options = {
          series: [{
            name: "sunardi",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Product Trends by Month',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

</script>
<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js') }}"></script>
<script type="text/javascript" src="./jquery.qrcode.js"></script>
<script type="text/javascript" src="./qrcode.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#copyButton").click(function() {
            let id = $(this).data('id-copy');
            let data = $("#default_short_url" + id);
            //    alert(data)

            data.select();
            data.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(data.value);

        })
        $("#resetButton").click(function() {
            $(".password-input").val(""); // Mengosongkan input kata sandi
        });
        // Menangani klik pada tombol Reset untuk modal tautan berjangka
        $("#time-reset").click(function() {
            $(".time-input").val(""); // Mengosongkan input tanggal dan waktu
        });

        $('.btn-qr').click(function() {

            alert($(this).data('link'))
            $(".demo").qrcode({

                // 0: normal
                // 1: label strip
                // 2: label box
                mode: 1,
                label: 'jQueryScript.Net',
                fontname: 'sans',
                fontcolor: '#000'

            });
            $('#zoomInModal2').modal({
                show: true
            })
        })
    });
    // Saat tombol "Bagikan" diklik
    $("#button-email").click(function() {
        // Dapatkan nilai tautan dari elemen h3
        var linkToCopy = $("#link-to-copy").text();

        // Masukkan nilai tautan ke dalam modal
        $("#default_short_url").val(linkToCopy);

        // Tambahkan atribut data-clipboard-text pada tombol "Copy"
        $("#copyButton").attr("data-clipboard-text", linkToCopy);
    });

    // ...

    // Menangani klik pada tombol Copy di dalam modal
    $("#copyButton").click(function () {
        var linkToCopy = $(this).attr("data-clipboard-text");

        // Salin tautan ke clipboard
        var tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(linkToCopy).select();
        document.execCommand("copy");
        tempInput.remove();

        // Tampilkan pesan sukses
        $("#successCopyAlert").fadeIn().delay(1500).fadeOut();
    });
    // Menangani klik pada label platform dalam modal "bagikan"
    $(".platform").click(function() {
        var platform = $(this).data("platform");
        //   alert(platform)
        var shortUrl = $("#default_short_url").text();

        switch (platform) {
            case "facebook":
                // Tambahkan logika untuk membagikan tautan ke Facebook
                // Misalnya, membuka jendela baru dengan tautan Facebook Share
                window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(shortUrl));
                break;
            case "twitter":
                // Tambahkan logika untuk membagikan tautan ke Twitter
                // Misalnya, membuka jendela baru dengan tautan Twitter Share
                window.open("https://twitter.com/intent/tweet?url=" + encodeURIComponent(shortUrl));
                break;
            case "whatsapp":
                // Tambahkan logika untuk membagikan tautan ke WhatsApp
                console.log(shortUrl) // Misalnya, membuka jendela baru dengan tautan WhatsApp Share
                window.open("https://api.whatsapp.com/send?text=" + encodeURIComponent(shortUrl));
                break;
            case "copy":
                var copyText = $(this).data('url')
                // alert(copyText)
                console.log()
                // copyText.focus();
                try {
                    navigator.clipboard.writeText(copyText);
                    console.log('Content copied to clipboard');
                } catch (err) {
                    console.error('Failed to copy: ', err);
                    alert('gagal ' + err)
                }

                // navigator.clipboard.writeText(copyText)
                // .then(function() {
                // if (edit != true) {
                // }
                // })
                // .catch(function(err) {
                // console.error("Penyalinan gagal: ", err);
                // alert("Penyalinan gagal. Silakan salin tautan secara manual.");
                // });
                break;

            case "qr":
                // Tambahkan logika untuk menghasilkan  dari tautan
                // Misalnya, membuka jendela baru dengan layanan pembuatan QR Code
                window.open(
                    " https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${document.getElementById('default_short_url{{ $i }}').innerText}" +
                    encodeURIComponent(shortUrl));
                break;
            default:
                break;
        }
    });
</script>
<script>
    $(document).ready(function() {
        $("#resetButton").click(function() {
            $(".password-input").val(""); // Mengosongkan input kata sandi
        });
        // Menangani klik pada tombol Reset untuk modal tautan berjangka
        $("#time-reset").click(function() {
            $(".time-input").val(""); // Mengosongkan input tanggal dan waktu
        });
    });
</script>
<script>
  const clickButton = document.getElementById("clickButton");
  const clickCountElement = document.getElementById("clickCount");

  // Mengecek apakah ada data jumlah klik yang sudah tersimpan di localStorage
  let clickCount = localStorage.getItem("clickCount");

  if (clickCount === null) {
    // Jika tidak ada data jumlah klik yang tersimpan, inisialisasi dengan 0
    clickCount = 0;
  }

  // Menampilkan jumlah klik saat halaman pertama dimuat
  clickCountElement.textContent = clickCount + " klik";

  // Menambahkan event listener untuk tombol
  clickButton.addEventListener("click", () => {
    clickCount++;

    // Menyimpan jumlah klik yang baru di localStorage
    localStorage.setItem("clickCount", clickCount);

    // Memperbarui tampilan di halaman
    clickCountElement.textContent = clickCount + " klik";
  });
</script>


<script>
    function archive() {
        message = confirm('Apakah Anda Ingin Mengarsip Tautan?');
        if (message) {
            window.location.reload();
        }
    }
</script>
<script>
    $(document).ready(function() {
        var selectId = $('#new_url_key').val();
        console.log(selectId);
        // Mendapatkan token CSRF dari meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Tambahkan kode berikut di bawahnya
        $('#submitKustom').click(function() {
            var newUrlKey = $('#new_url_key').val();
            // alert('masuk')
            $.ajax({
                headers: {
                    'X-CSRF-Token': csrfToken,
                },
                url: "/update-short-link/" + $('#new_url_key').data("original"),
                method: 'POST',
                data: {
                    newUrlKey: newUrlKey
                },
                dataType: 'JSON',
                success: function(e) {
                    location.reload()
                }
            })
            // console.log(newUrlKey);

            // Lakukan permintaan AJAX untuk mengirim data ke server
            // var xhr = new XMLHttpRequest();
            // xhr.open('POST', '/update-short-link/'+newUrlKey, true);
            // xhr.setRequestHeader('Content-Type', 'application/json');
            // xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken); // Menambahkan header CSRF token
            // xhr.onreadystatechange = function() {
            //     if (xhr.readyState === 4 && xhr.status === 200) {
            //         // Tanggapan sukses dari server
            //         var response = JSON.parse(xhr.responseText);
            //         // Lakukan tindakan sesuai dengan respons dari server
            //         console.log(response);
            //     }
            // };
            // var data = JSON.stringify({
            //     newUrlKey: newUrlKey
            // });
            // xhr.send(data);
        });
    });

    $('.edit-link').click(function() {
        var link = $(this).data('link');

        // Mengisi nilai input dengan link yang dipilih
        $('#new_url_key').val(link);
        $('#new_url_key').attr("data-original", link);

    });
</script>
<script>
    $(document).ready(function() {
       var selectId = $('#deactivated_at').val();
       console.log(selectId);
       var csrfToken = $('meta[name="csrf-token"]').attr('content');

       $(document).on('click', '.btn-submit', function() {
           var id = $(this).data('id');
           var key = $(this).data('key');
           var newTime = $('#deactivated_at-' + id).val();
           if(newTime == null || newTime == "") {
               alert('data harus di isi')
               return
           }

           $.ajax({
               headers: {
                   'X-CSRF-Token': csrfToken,
               },
               url: "/update-deactivated/" + key,
               method: 'POST',
               data: {
                   newTime: newTime
               },
               dataType: 'JSON',
               success: function(e) {
                   location.reload()
               },
               error: function(response) {
                   console.log(response);
               }
           });
       });
   });
</script>
<script>
    // Mendapatkan semua tautan dengan class "access-link"
    var links = document.querySelectorAll('.access-link');

    // Loop melalui setiap tautan
    links.forEach(function(link) {
        // Menambahkan event listener saat tautan diklik
        link.addEventListener('click', function(event) {
            // Jika tautan tidak memiliki class "inactive", maka tautan masih aktif
            if (!link.classList.contains('inactive')) {
                // Lanjutkan ke URL tautan
                return;
            }

            // Mencegah tautan mengarahkan ke URL
            event.preventDefault();

            // Tampilkan alert bahwa tautan sudah tidak dapat diakses
            alert('Tautan sudah tidak dapat diakses.');
        });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.search').keyup(function() {
                var searchText = $(this).val().toLowerCase();
                $('.card').each(function() {
                    var cardText = $(this).text().toLowerCase();
                    if (cardText.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#tautanberjangka").collapse('toggle');
                var buttonText = $(this).text();
                if (buttonText.trim() === "Tampilkan lebih banyak") {
                    $(this).html('Tampilkan lebih sedikit <i class="fa-solid fa-angle-up"></i>');
                } else {
                    $(this).hide();
                }
            });
        });
    </script>
    <script>
        // Mendapatkan semua tautan dengan class "access-link"
        var links = document.querySelectorAll('.access-link');

        // Loop melalui setiap tautan
        links.forEach(function(link) {
            // Menambahkan event listener saat tautan diklik
            link.addEventListener('click', function(event) {
                // Jika tautan tidak memiliki class "inactive", maka tautan masih aktif
                if (!link.classList.contains('inactive')) {
                    // Lanjutkan ke URL tautan
                    return;
                }

                // Mencegah tautan mengarahkan ke URL
                event.preventDefault();

                // Tampilkan alert bahwa tautan sudah tidak dapat diakses
                alert('Tautan sudah tidak dapat diakses.');
            });
        });
    </script>

@endsection
@endsection
