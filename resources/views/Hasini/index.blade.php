@extends('PaymentSlipFormParent')

@section('main')

</br>
</br>
<table class="table table-bordered table-striped text-center" >
        <tr>
            <th width="5%">Customer ID </th>
            <th width="5%">Term </th>
            <th width="10%">Bank </th>
            <th width="10%">Paid Amount </th>
            <th width="10%">Scan Slip Image </th>
            <th width="10%">Created at </th>
            <th width="10%">Updated at </th>
            <th width="25%">Action </th>
        </tr>

        @foreach($data as $row)
        <tr>
            <td>{{ $row->CusID}}</td>
            <td>{{ $row->Term}}</td>
            <td>{{ $row->Bank}}</td>
            <td>{{ $row->PaidAmount}}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $row->ScanCopyImg}}" width="100%" height="50px" /></td>
            <td>{{ $row->created_at}}</td>
           <td>{{ $row->updated_at}}
            <td>
                <a href="{{ route('paymentslip.show', $row->CusID, $row->Term ) }}" class="btn btn-primary">Show</a>
            </td>
        </tr> 

        @endforeach
</table>
<!--{!! $data->links() !!}-->
{{$data->links()}}
@endsection 


         <!-- create delete confirmation box-->
   <!-- <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                    <h2 class="modal-title">Confirmation</h2>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

<script>
    var slip_id;
    $(document).on('click','.delete', function() {
        slip_id = $(this).attr('CusID');
        $('#confirmModal').modal('show');
    });

    $('#ok_button').click(function(){
        $.ajax({
            url:"/ajax-crud/destroy/" + user_id,
            beforeSend:function(){
                $('#ok_button').text('Deleting...');
            },
            success:function(data) {
                setTimeout(function(){
                    $('#confirmModal').modal('show');
                    $('#user_table').DataTable().ajax.reload();
                }, 2000);
            }
        })
    });

</script>-->
    