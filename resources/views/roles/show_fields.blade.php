<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $role->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $role->created_at->format('D d, M, Y') !!}</p>
</div>

<!-- Id Field -->
 {{--<div class="form-group">-->
   {!! Form::label('id', 'Id:') !!}
        <p>{!! $role->id !!}</p>
    </div>--}}

<!-- Deleted At Field -->
 {{--<div class="form-group">-->
   {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $role->deleted_at !!}</p>
</div>--}}

<!-- Updated At Field -->
{{--<div class="form-group">-->
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $role->updated_at->format('D d, M, Y') !!}</p>
</div>--}}

@include('users.table');

{{--@if($qrcode->user_id==Auth::user()->id ||Auth::user()->role_id < 3)--}}
