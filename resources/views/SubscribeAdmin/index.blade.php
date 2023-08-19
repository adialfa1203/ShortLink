@extends('layout.admin.app')

@section('title','Link')
@section('style')
<style>

</style>
@endsection
@section('content')
<div class="page-content">
  <a href="/AddSubscribe"> <button type="button" class="btn btn-success">Tambah</button></a>
    <div class="row mt-3">
        <div class="col-3">
            <div class="card">
                <img src="{{asset('template/cat.png')}}" alt="" width="100%">
                <div class="card-body" style="text-align: center;">
                    <h2 class=" mb-2">Rp:0</h2>
                    <h5>Gratis</h5>
                    <p class="card-text">At missed advice my it no sister. Miss told ham dull knew see she spot near can. Spirit her entire her called.</p>
                </div>
            </div><!-- end card -->
        </div>
        <div class="col-3 ms-3">
            <div class="card">
                <img src="{{asset('template/cat.png')}}" alt="" width="100%">
                <div class="card-body" style="text-align: center;">
                    <h2 class=" mb-2">Rp:0</h2>
                    <h5>Gratis</h5>
                    <p class="card-text">At missed advice my it no sister. Miss told ham dull knew see she spot near can. Spirit her entire her called.</p>
                </div>
            </div><!-- end card -->
        </div>
        <div class="col-3 ms-3">
            <div class="card">
                <img src="{{asset('template/cat.png')}}" alt="" width="100%">
                <div class="card-body" style="text-align: center;">
                    <h2 class=" mb-2">Rp:0</h2>
                    <h5>Gratis</h5>
                    <p class="card-text">At missed advice my it no sister. Miss told ham dull knew see she spot near can. Spirit her entire her called.</p>
                </div>
            </div><!-- end card -->
        </div>
    </div>

</div>
@section('script')
<script>

</script>
@endsection
@endsection
