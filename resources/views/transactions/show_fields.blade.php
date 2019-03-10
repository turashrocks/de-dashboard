<!-- Id Field -->
<!--<div class="form-group">
    {{--{!! Form::label('id', 'Transaction ID:') !!}--}}
    <p>{{--{!! $transaction->id !!}--}}</p>
</div>-->

<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Product Name:') !!}
    <p>
        <a href="/qrcodes/{!! $transaction->qrcode['id'] !!}">
            {!! $transaction->qrcode['product_name'] !!}
        </a>
    </p>
</div>

<!-- Buyer Name Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Buyer Name:') !!}
    <p>
        <a href="/users/{!! $transaction->user['id'] !!}">
            {!! $transaction->user['name'] !!}
        </a>
    </p>
</div>

<!-- Qrcode Owner Field -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Qrcode Owner Name:') !!}
    <p>
        <a href="/users/{!! $transaction->qrcode_owner['id'] !!}">
            {!! $transaction->qrcode_owner['name'] !!}
        </a>
    </p>
</div>

<!-- Amount Field -->
<div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        <p>{!! $transaction->amount !!}</p>
    </div>

<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $transaction->payment_method !!}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $transaction->message !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $transaction->status !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $transaction->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transaction->created_at->format('D d, M, Y h:i') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $transaction->updated_at->format('D d, M, Y h:i') !!}</p>
</div>

