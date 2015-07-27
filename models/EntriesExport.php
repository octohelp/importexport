<?php
namespace Octohelp\Importexport\Models;

class EntriesExport extends \Backend\Models\ExportModel {
    public function exportData($columns, $sessionKey = null) {
        $entries = Entries::all();
        $entries->each(function($subscriber) use ($columns) {
            $subscriber->addVisible($columns);
        });
        return $entries->toArray();
    }

    public function getCityOptions($keyValue = null) {
        return ['New-York' => 'New-York','Los Angeles'=>'Los Angeles'];
    }
}