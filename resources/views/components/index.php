<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="garden wrap">
    <h1 class="font-bold text-3xl">Components</h1>

    <hr>

    <div class="p-6">
        <?php echo garden()->view('components.alerts') ?>
    </div>
    <div class="p-6">
        <?php echo garden()->view('components.buttons') ?>
    </div>
    <div class="p-6">
        <?php echo garden()->view('components.cards') ?>
    </div>
    <div class="p-6">
        <?php echo garden()->view('components.forms') ?>
    </div>
    <div class="p-6">
        <?php echo garden()->view('components.navs') ?>
    </div>
    <div class="p-6">
        <?php echo garden()->view('components.grids') ?>
    </div>
</div>