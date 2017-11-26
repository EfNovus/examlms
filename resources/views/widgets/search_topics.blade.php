<table class="table table-striped table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>

        </tr>
        </thead>
    </table>

<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true,
            fixedHeader: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },

            ]
        });
    });
</script>






