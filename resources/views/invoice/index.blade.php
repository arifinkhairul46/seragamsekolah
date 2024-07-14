<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=').time() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"  type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</head>
<body>
    <div class="d-flex">
        <div class="w-half">
            <img src="{{ asset('assets/images/logo-yayasan_1.png') }}" alt="logo" width="200" />
        </div>
        <div class="bg-tk text-white">
            <h3> Yayasan Rabbani Asysa </h3>
            <p> Jl. Jati No.5, Arcamanik, Kota Bandung </p>
            <h2>Invoice Pemesanan Seragam</h2>
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

                <td style="width: 400px">
                </td>

                <td >
                    <h6>Invoice No: {{$pemesan->no_pemesanan}} </h6>
                    <div>Tanggal : {{date('d-m-Y', strtotime($pemesan->created_at))}} </div>
                    <div> <p></p> </div>
                </td>
            </tr>
        </table>
    </div>
 
    <div class="mt-4">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskrips Item</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail_pesan as $item)
                <tr class="items">
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            {{ $item->produk_id }}
                        </td>
                        <td>
                            {{ $item->produk_id }}
                        </td>
                        <td>
                            {{ $item->quantity }}
                        </td>
                        <td>
                            {{ $item->produk_id }}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
 
    <div class="total">
        Total: $129.00 USD
    </div>
 
    <div class="footer">
        <div>Thank you</div>
        <div>&copy; Laravel Daily</div>
    </div>
</body>
</html>