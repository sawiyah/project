@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Buat Laporan</h1>
            <hr>
            <form action="{{ route('isian.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="rt">RT:</label>
                    <input type="text" class="form-control" id="rt" name="rt">
                </div>
                <div class="form-group">
                    <label for="desa">Desa:</label>
                    <input type="text" class="form-control" id="desa" name="desa">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan:</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                </div>
                <div class="form-group">
                    <label for="laporan">Laporan:</label>
                    <textarea class="form-control" id="laporan" name="laporan"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection