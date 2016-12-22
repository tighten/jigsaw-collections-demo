<div class="panel m-xs-t-6">
    <div class="panel-heading">
        <h4 class="text-sm wt-light text-uppercase text-brand">Page meta</h4>
    </div>

    <div class="panel-body">
        <div class="p-xs-b-4 border-b">
            <p class="text-xs text-dark-soft text-uppercase">Filename:</p>
            <p class="p-xs-l-2 text-sm">{{ $filename }}</p>
        </div>

        <div class="p-xs-y-4 border-b">
            <p class="text-xs text-dark-soft text-uppercase">Extension:</p>
            <p class="p-xs-l-2 text-sm">{{ $extension }}</p>
        </div>

        <div class="p-xs-y-4 border-b">
            <p class="text-xs text-dark-soft text-uppercase">Path:</p>
            <p class="p-xs-l-2 text-sm">{{ $path }}</p>
        </div>

        <div class="p-xs-y-4 border-b">
            <p class="text-xs text-dark-soft text-uppercase">BASE URL:</p>
            <p class="p-xs-l-2 text-sm">{{ $config->baseUrl }}</p>
        </div>

        <div class="p-xs-y-4 border-b">
            <p class="text-xs text-dark-soft text-uppercase">URL:</p>
            <p class="p-xs-l-2 text-sm">{{ $url }}</p>
        </div>

        <div class="p-xs-t-4">
            <p class="text-xs text-dark-soft text-uppercase">Global Variable:</p>
            <p class="p-xs-l-2 text-sm">{{ $config->global_variable }}</p>
        </div>
    </div>
</div>
