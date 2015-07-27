<?php
namespace Octohelp\Importexport\Models;

class EntriesExport extends \Backend\Models\ExportModel {
    public function exportData($columns, $sessionKey = null) {
        dd(Entries::get()->addVisible($columns)->toArray());
        return Entries::addVisible($columns)->get()->toArray();
    }

    public function getCityOptions($keyValue = null) {
        return ['New-York' => 'New-York','Los Angeles'=>'Los Angeles'];
    }
}