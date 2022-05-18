@extends('layout.dashboard')

@section('maincontent')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Color</h3>
        </div>

        <div class="card-body">
            <div class="form-group text-right">
                <a href="{{ route('color.add') }}" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
            </div>
            <!-- /.card-header -->
            <table id="myTable" class="display table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Color_Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($color as $col)
                        <tr>
                            <td>{{ $col->id }}</td>
                            <td id="name-{{ $col->id }}">{{ $col->name }}</td>
                           
                            <td>
                                <div>

                                    <a href="{{ url('/admin/color/edit',[$col->id]) }}" class="editdata" name="{{ $col->name }}"
                                        data-id="{{ $col->id }}"><i
                                            class="far fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('color.index') }}" class="delete"
                                        data-id="{{ $col->id }}"><i class="fas fa-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('custom-script')
    {{-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script> --}}
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.card-body #myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
                "responsive": true,
                "autoWidth": false,
            });

        });
    </script>

@endpush


</body>

</html>
