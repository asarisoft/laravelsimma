<!-- Key Field -->
<div class="form-group">
    {!! Form::label('key', 'Key:') !!}
    <p>{{ $childrenLogs->key }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $childrenLogs->date }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $childrenLogs->total }}</p>
</div>

<!-- List Id Field -->
<div class="form-group">
    {!! Form::label('list_id', 'List Id:') !!}
    <p>{{ $childrenLogs->list_id }}</p>
</div>

<!-- Failed List Id Field -->
<div class="form-group">
    {!! Form::label('failed_list_id', 'Failed List Id:') !!}
    <p>{{ $childrenLogs->failed_list_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $childrenLogs->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $childrenLogs->updated_at }}</p>
</div>

