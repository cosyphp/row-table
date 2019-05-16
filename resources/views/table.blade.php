<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'table-has-error' !!}">
    <div class="col-sm-12">
        {!! $table !!}
        
        @include('row-table::error')

        @include('admin::form.help-block')

    </div>
</div>