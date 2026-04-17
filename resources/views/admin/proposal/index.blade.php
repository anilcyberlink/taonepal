@extends('admin.master')
@section('title', Request::segment(2))
@section('breadcrumb')
@endsection
@section('content')

    <section id="" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="">
            <h4>Donation List</h4>
            <!-- recent orders table -->
            <div class="panel">
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table admin-form table-striped dataTable" id="datatable3">
                            <thead>
                                <tr class="bg-light">
                                    <th class="text-center"> SN </th>
                                    <th>Full Name</th>
                                    <th>Contact Detail</th>
                                    <th>Amount</th>
                                    <th>Purpose</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $row)
                                    <tr class="id{{ $row->id }}">
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td><strong>{{ ucfirst($row->full_name) }}</strong></td>
                                        <td class=""> {{ $row->email }}<br>{{ $row->contact }} </td>
                                        <td class="date"> {{ $row->doctor }}<br>{{ $row->department }} </td>
                                        <td class="date"> {{ $row->gender }} </td>

                                        <td><a href="{{ route('proposal-delete', $row->id) }}"
                                                onclick="confirm('Confirm Delete?')">Delete</a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: .tray-center -->
    </section>

@endsection

@section('libraries')
    <!-- Datatables -->
    <script src="{{ asset(env('PUBLIC_PATH')) }}vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

    <!-- Datatables Tabletools addon -->
    <script
        src="{{ asset(env('PUBLIC_PATH')) }}vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js">
    </script>

    <!-- Datatables ColReorder addon -->
    <script
        src="{{ asset(env('PUBLIC_PATH')) }}vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js">
    </script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src="{{ asset(env('PUBLIC_PATH')) }}vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
        /************/
        $('#datatable3').dataTable({
            "aoColumnDefs": [{
                'bSortable': true,
                'aTargets': [-1]

            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "Previous",
                    "sNext": "Next"
                }
            },
            "iDisplayLength": 50,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "{{ asset(env('PUBLIC_PATH')) }}vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });
    </script>

@endsection
