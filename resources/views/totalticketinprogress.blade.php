@extends('layouts.main')

@section('main-section')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-default-sec" style="overflow:hidden">
        <div class="container" style="overflow-X:scroll">
            <table id="myTable">
                <thead>
                    <th>Sr.No</th>
                    <th>TICKET ID</th>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Ticket Status</th>
                </thead>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    let v=$('#myTable').DataTable({
        data:<?php echo $users?>,
        columnDefs: [
            {
                searchable: false,
                orderable: false,
                targets: 0,
            },
        ],
        order: [[1, 'asc']],
        columns:[
            {data:'id'},
            {data:'ticketid'},
            {data:'category'},
            {data:'question'},
            {data:'ticket_status'},
        ]
    });
    v.on('order.dt search.dt', function () {
        let i = 1;
        v.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
            this.data(i++);
        });
    }).draw();
});
</script>
@endsection