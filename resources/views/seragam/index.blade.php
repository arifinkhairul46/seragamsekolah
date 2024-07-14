@extends('layouts.app')

@section('content')

    <div class="header">
        <div class="background">
            <img class="" src="{{ asset('assets/images/vector-1.png') }}" width="60%" alt="text">
        </div>
        <div class="center" style="position: absolute; top:0">
            <img src="{{ asset('assets/images/rabbani_school_uniform.png') }}" width="50%" alt="text" style="margin-left: 20px">
            <img src="{{ asset('assets/images/disc_20.png') }}" alt="discount" width="50%">
        </div>
        <div class="vector">
            <img src="{{ asset('assets/images/sun.png') }}" class="badge-sun" width="25%" alt="sun">
            <img src="{{ asset('assets/images/badge-putih.png') }}" class="badge-putih" width="15%" alt="putih">
            <img src="{{ asset('assets/images/badge-pangsi.png') }}" class="badge-pangsi" width="15%" alt="pangsi">
            <img src="{{ asset('assets/images/badge-pramuka.png') }}" class="badge-pramuka" width="15%" alt="pramuka">
            <img src="{{ asset('assets/images/badge-kebaya.png') }}" class="badge-kebaya" width="15%" alt="kebaya">
        </div>
        
       
    </div>    
    
    <div class="container">
        <img class="center mt-3" src="{{ asset('assets/images/biodata.png') }}" alt="biodata" width="30%">
        <div class="row mx-auto">
            <div class="col-md">
                {{-- <h6 class="mt-1" style="color: #ED145B">Pemesanan</h6>
                <h4 class="mb-3">Seragam Siswa</h4>
                <div class="text" style="text-align: right">
                    <button class="btn btn-blue"><i class="fa-solid fa-plus"></i> Tambah Siswa</button>
                </div> --}}
                <form action="#"  method="POST">
                    @csrf
                    <div class="form-floating mt-3">
                        <input class="form-control form-control-sm" id="nama_pemesan" name="nama_pemesan" placeholder="Masukkan Nama Pemesan" required>
                        <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                    </div>


                    <div class="form-floating mt-3">
                        <input class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Whatsapp" required>
                        <label for="no_hp" class="form-label">No HP</label>
                    </div>

                    <div class="center my-4">
                        <img src="{{ asset('assets/images/katalog_produk_tk.png') }}" alt="discount" width="50%">
                    </div>

                    <div class="d-grid-card" >
                        @foreach ($produk_seragam as $item)
                            @if($item->jenjang_id == 2)
                            <div class="card">
                                <img src="{{ asset('assets/images/'.$item->image) }}" class="card-img-top" alt="{{$item->image}}">
                                <div class="card-body center">
                                    <h6 class="card-title ">{{$item->nama_produk}}</h6>
                                    <p class="mb-0"> Rp. {{number_format($item->harga_awal)}} </p>
                                    <span class="mt-2"> Ukuran </span>
                                    <div class="d-flex" style="justify-content: center">
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}"  id="uk_s_{{$item->id}}" value="s">
                                            <label class="form-check-label" for="uk_s_{{$item->id}}">
                                            <span>S </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_m_{{$item->id}}" value="m">
                                            <label class="form-check-label" for="uk_m_{{$item->id}}">
                                            <span>M </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_l_{{$item->id}}" value="l">
                                            <label class="form-check-label" for="uk_l_{{$item->id}}">
                                            <span>L </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_xl_{{$item->id}}" value="xl">
                                            <label class="form-check-label" for="uk_xl_{{$item->id}}">
                                                <span>    XL </span>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button"  class="btn btn-primary btn-sm mt-2 px-3" onclick="openModal({{$item->id}})">Add to Cart</button>
                                    
                                    <div class="d-flex quantity mt-3">
                                        <p class="mt-1" style="font-size: 13px"> Jumlah </p>
                                        <div class="input-group" style="border: none; justify-content:end">
                                            <div class="button minus">
                                                <button type="button" class="btn btn-outline-plus-minus" disabled="disabled" data-type="minus" data-field="quant[]">
                                                    <i class="fas fa-minus-circle"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="quant[]" class="input-number"  data-min="1" data-max="100" value="">
                                            <input type="hidden" name="qty_id[]" value="">
                                            <div class="button plus">
                                                <button type="button" class="btn btn-outline-plus-minus" data-type="plus" data-field="quant[]">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a href="#"  class="btn btn-primary btn-sm mt-2">Add to Cart</a> --}}

                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="center my-4">
                        <img src="{{ asset('assets/images/katalog_produk_sd.png') }}" alt="discount" width="50%">
                    </div>

                    <div class="d-grid-card" >
                        @foreach ($produk_seragam as $item)
                            @if($item->jenjang_id == 3)
                            <div class="card">
                                <img src="{{ asset('assets/images/'.$item->image) }}" class="card-img-top" alt="{{$item->image}}">
                                <div class="card-body center">
                                    <h6 class="card-title ">{{$item->nama_produk}}</h6>
                                    <p> Rp. {{number_format($item->harga_awal)}} </p>
                                    <span> Ukuran </span>
                                    <div class="d-flex" style="justify-content: space-between">
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}"  id="uk_s_{{$item->id}}" value="s">
                                            <label class="form-check-label" for="uk_s_{{$item->id}}">
                                            <span>    S </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_m_{{$item->id}}" value="m">
                                            <label class="form-check-label" for="uk_m_{{$item->id}}">
                                            <span>    M </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_l_{{$item->id}}" value="l">
                                            <label class="form-check-label" for="uk_l_{{$item->id}}">
                                            <span>    L </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_xl_{{$item->id}}" value="xl">
                                            <label class="form-check-label" for="uk_xl_{{$item->id}}">
                                                <span>    XL </span>
                                            </label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-sm mt-2">Add Cart</a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="center my-4">
                        <img src="{{ asset('assets/images/katalog_produk_smp.png') }}" alt="discount" width="50%">
                    </div>

                    <div class="d-grid-card" >
                        @foreach ($produk_seragam as $item)
                            @if($item->jenjang_id == 4)
                            <div class="card">
                                <img src="{{ asset('assets/images/'.$item->image) }}" class="card-img-top" alt="{{$item->image}}">
                                <div class="card-body center">
                                    <h6 class="card-title ">{{$item->nama_produk}}</h6>
                                    <p> Rp. {{number_format($item->harga_awal)}} </p>
                                    <span> Ukuran </span>
                                    <div class="d-flex">
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}"  id="uk_s_{{$item->id}}" value="s">
                                            <label class="form-check-label" for="uk_s_{{$item->id}}">
                                            <span>S </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_m_{{$item->id}}" value="m">
                                            <label class="form-check-label" for="uk_m_{{$item->id}}">
                                            <span>M </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_l_{{$item->id}}" value="l">
                                            <label class="form-check-label" for="uk_l_{{$item->id}}">
                                            <span>L </span>
                                            </label>
                                        </div>
                                        <div class="button-ukuran">
                                            <input class="form-check-input" type="radio" name="ukuran_{{$item->id}}" id="uk_xl_{{$item->id}}" value="xl">
                                            <label class="form-check-label" for="uk_xl_{{$item->id}}">
                                                <span>    XL </span>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm mt-2">Add Cart</a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="mt-3 center">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        var pesanan = [];

        function openModal(item_id) {
            $("#produk_id_terpilih").val(item_id);
            $('#form_detail').modal('show');
        }

        function addToCart() {
            var new_pesanan = {};
            var item_id = $("#produk_id_terpilih").val();
            var ukuran = $('input[name="ukuran_'+item_id+'"]:checked').val();
            new_pesanan['nama_siswa'] = $("#nama_siswa").val();
            new_pesanan['kelas'] = $("#kelas").val();
            new_pesanan['produk_id'] = item_id;
            new_pesanan['ukuran'] = ukuran;
            pesanan.push(new_pesanan);
            console.log(pesanan);
            $('#form_detail').modal('hide');
        }
      
    </script>
@endsection

<div class="modal fade" id="form_detail" tabindex="-1" role="dialog" aria-labelledby="member_rbn" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="member_rbn">Untuk Siapa Seragam Ini</h5>
            </div>
            <div class="modal-body">
                <div class="form-floating mt-3">
                        <input class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan Nama Siswa" required>
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                </div>

                <div class="form-floating mt-3">
                    <select name="lokasi" id="lokasi" class="form-control" required>
                        <option value="" disabled selected>-- Pilih Lokasi --</option>
                        @foreach ($lokasi as $item)
                            <option value="{{ $item->kode_sekolah }}"> {{ $item->nama_sekolah }}</option>
                        @endforeach
                    </select>
                    <label for="lokasi" class="form-label">Lokasi</label>

                </div>

                <div class="form-floating mt-3">
                    <input class="form-control" id="kelas" name="kelas" placeholder="Kelas" required>
                    <label for="kelas" class="form-label">Nama Kelas</label>
                </div>

                <input type="hidden" id="produk_id_terpilih">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" onclick="addToCart()">Simpan</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>