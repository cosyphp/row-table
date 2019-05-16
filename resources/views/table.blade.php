<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'table-has-error' !!}">
    <div class="{{$viewClass['field']}}">
        {!! $table !!}
        
        @include('row-table::error')

        @include('admin::form.help-block')

    </div>
</div>