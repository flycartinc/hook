# Flycart Hook for Herbert
Add the bellow piece of code in **plugin.php** to set $app in Facade


`if ( is_plugin_active(plugin_basename( __FILE__ )) ) {`
 `   $plugin = new \Herbert\Framework\Base\Plugin(plugin_dir_path( __FILE__ ));`
 `   $herbert->registerPlugin($plugin);`
 `   $app = $plugin->getContainer();`
** `   FlycartHook\Facades\Facade::setFacadeApplication($app);`**
`}`


Add the bellow piece of code in **herbert.config.php** to load FlycartHook service provider
`'providers' => array(`
** `       FlycartHook\HookServiceProvider::class`**
 `       )`
 
 # Flycart Hook Example 
`\FlycartHook\Facades\Action::add('init', 'ClassName@functionName');`
`\FlycartHook\Facades\Action::run('eventname', $args);`


`\FlycartHook\Facades\Filter::add('eventname', 'ClassName@functionName');`
`\FlycartHook\Facades\Filter::run('eventname', $args);`