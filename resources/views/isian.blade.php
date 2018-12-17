@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>PROSIBAD</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>RT</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Laporan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas['rt'] }}</td>
                        <td>{{ $datas['desa'] }}</td>
                        <td>{{ $datas['kecamatan'] }}</td>
                        <td>{{ $datas['laporan'] }}</td>
                        <td>
                            {!!  Form::open(["method" => 'DELETE','route'
                                                => ["isian.destroy", $datas['id']], 'style' => 'display:inline']) !!}
                            {!!  Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!!  Form::close() !!}
                            <a href="{{ route('isian.edit', $datas['id']) }}" class=" btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection