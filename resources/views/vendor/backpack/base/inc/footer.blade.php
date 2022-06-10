@if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
    <div class="text-muted ml-auto mr-auto">
      @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
      <a target="_blank" rel="noopener" href="mailto:{{ config('global.adminEmail') }}">Contact admin</a>
      @endif
    </div>
@endif
