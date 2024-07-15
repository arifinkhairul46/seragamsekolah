<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css?v=').time() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"  type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</head>
<body>
    <div class="d-flex">
        <div class="w-half">
            <img src="{{ asset('assets/images/logo-yayasan_1.png') }}" alt="logo" width="150" />
        </div>
        <div class="bg-tk text-white p-2">
            <h5> Yayasan Rabbani Asysa </h5>
            <p class="mb-1" style="font-size: 12px"> Jl. Jati No.5, Arcamanik, Kota Bandung </p>
            <h4>Invoice</h4>
        </div>
    </div>
 
    <div class="mt-5">
        <table class="w-full">
            <tr>
                <td>
                    <h6>Kepada :</h6>
                    <div> {{$pemesan->nama_pemesan}} </div>
                    <div> {{$pemesan->no_hp}} </div>
                </td>

                <td style="width: 35%">
                </td>

                <td >
                    <p class="mb-0" style="font-size: 14px">Invoice No: {{$pemesan->no_pemesanan}} </p>
                    <div style="font-size: 14px">Tanggal : {{date('d-m-Y', strtotime($pemesan->created_at))}} </div>
                    {{-- <div> <p>&nbsp;</p> </div> --}}
                </td>
            </tr>
        </table>
    </div>
 
    <div class="mt-4">
        <table class="table table-stripped">
            <thead >
                <tr>
                    <th class="bg-thead">No</th>
                    <th class="bg-thead">Deskrips Item</th>
                    <th class="bg-thead">Harga</th>
                    <th class="bg-thead">Jumlah</th>
                    <th class="bg-thead">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $total_harga = 0; ?>
                @foreach($detail_pesan as $item)
                
                <tr class="items">
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td>
                        {{ $item->nama_produk }} ({{$item->ukuran}})
                    </td>
                    <td>
                        {{ number_format($item->harga_awal) }}
                    </td>
                    <td>
                        {{ $item->quantity }}
                    </td>
                    <td>
                        {{ number_format($item->harga_awal *  $item->quantity)}}
                    </td>
                </tr>
                <?php $total_harga += $item->harga_awal * $item->quantity; ?>
                @endforeach
                <tr>
                    <td colspan="3"></td>
                    <td><h6>Sub Total</h6></td>
                    <td id="total_harga" colspan="2"><h6>Rp {{number_format($total_harga)}} </h6></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td><h6>Diskon</h6></td>
                    <td id="diskon" colspan="2"><h6>Rp - {{number_format(20/100 * $total_harga)}} </h6></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td><h6>Total Harga</h6></td>
                    <td id="harga_akhir" colspan="2"><h6>Rp {{number_format(80/100 * $total_harga)}} </h6></td>
                </tr>
            </tbody>
        </table>
    </div>


 
    <div class="d-flex">
        <div class="konfirmasi" style="justify-content: start; font-size: 13px">
            <p class="mb-1"> <b>Konfirmasi Pembayaran</b> </p>
            <span > CCRS Sekolah Rabbani </span>
            <p> +62 851-7327-3274 </p>
        </div>

        <div></div>

        <div class="tf_bayar" style="justify-content: end; font-size: 13px">
            <span> Kirim <i>Transfer</i> ke </span>
            <p class="mb-0"><b> Bank Syariah Indonesia (BSI) </b> </p>
            <span id="no_rek_seragam"> 7700700218 </span>
            <p> an. <b>Seragam Sekolah Rabbani</b> </p>
        </div>
    </div>

    <div class="mb-4">Terimakasih</div>
 
    <div class="footer-invoice bg-thead">
        <div class="d-flex p-2" style="justify-content: space-between; background-color:#3FA2F6">
            <div class="web">
                <i style="color: white" class="fa-solid fa-globe"></i>
                <span class="text-white" style="font-size: 10px"> www.sekolahrabbani.sch.id</span>
            </div>
            <div class="ig">
                <i style="color: white" class="fa-brands fa-instagram"></i>
                <span class="text-white" style="font-size: 10px">sekolahrabbani</span>
            </div>
            <div class="wa">
                <i style="color: white" class="fa-brands fa-whatsapp"></i>
                <span class="text-white" style="font-size: 10px">+62 851-7327-3274</span>
            </div>
        </div>
    </div>
</body>
</html>