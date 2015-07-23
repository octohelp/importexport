<?php namespace Acme\Importexport;

use System\Classes\PluginBase;

/**
 * importexport Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'importexport',
            'description' => 'No description provided yet...',
            'author'      => 'acme',
            'icon'        => 'icon-leaf'
        ];
    }

}
