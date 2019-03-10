<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <b><h2>{!! $qrcode->product_name !!}</h2></b>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>${!! $qrcode->amount !!}</p>
</div>

<!-- Product Url Field -->
<div class="form-group">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p>{!! $qrcode->product_url !!}</p>
</div>

<!-- Qr Code Image -->
<div class="form-group">
    {!! Form::label('qrcode_path', 'Qecode Image:') !!}
    <p><img src="{{asset($qrcode->qrcode_path)}}" width="170"></p>
</div>

@if($qrcode->user_id==Auth::user()->id ||Auth::user()->role_id < 3)
    <!-- Id Field -->
    <div class="form-group">
        {!! Form::label('id', 'Id:') !!}
        <p>{!! $qrcode->id !!}</p>
    </div>

    <div class="form-group">
            {!! Form::label('qrcode_path', 'Qecode Path:') !!}
            <p>{!! $qrcode->qrcode_path !!}</p>
        </div>

    <!-- Website Field -->
    <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{!! $qrcode->website !!}</p>
    </div>

    <!-- Company Name Field -->
    <div class="form-group">
        {!! Form::label('company_name', 'Company Name:') !!}
        <p>{!! $qrcode->company_name !!}</p>
    </div>

    <!-- Callback Url Field -->
    <div class="form-group">
        {!! Form::label('callback_url', 'Callback Url:') !!}
        <p>{!! $qrcode->callback_url !!}</p>
    </div>

    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
        <p>{!! $qrcode->qrcode_path !!}</p>
    </div>

    <!-- Status Field -->
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>
            @if($qrcode->status==1)
                Active
            @else
                Inactive
            @endif
        </p>
    </div>

    <!-- Deleted At Field -->
    <div class="form-group">
        {!! Form::label('deleted_at', 'Deleted At:') !!}
        <p>{!! $qrcode->deleted_at !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $qrcode->created_at !!}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{!! $qrcode->updated_at !!}</p>
    </div>
@endif