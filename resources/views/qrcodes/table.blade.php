<table class="table table-responsive" id="qrcodes-table">
    <thead>
        <tr>
            <th>Website</th>
        <th>Company Name</th>
        <th>Product Name</th>
        <th>Amount</th>
        <th>Status</th>
        @if(Auth::user()->role_id == 1)
        <th colspan="3">Action</th>
        @endif
        </tr>
    </thead>
    <tbody>
    @foreach($qrcodes as $qrcode)
        <tr>
            <td>{!! $qrcode->website !!}</td>
            <td>{!! $qrcode->company_name !!}</td>
            <td>{!! $qrcode->product_name !!}</td>
            
            <td>{!! $qrcode->amount !!}</td>
            <td>
                {{--{!! $qrcode->status !!}--}}
                @if($qrcode->status==1)
                active
                @else
                inactive
                @endif
            </td>
            @if(Auth::user()->role_id == 1)
            <td>
                {!! Form::open(['route' => ['qrcodes.destroy', $qrcode->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>