<?php
namespace Acme\Importexport\Models;
class EntriesExport extends \Backend\Models\ExportModel {
    public function exportData($columns, $sessionKey = null) {

    }

    public function getCityOptions($keyValue = null) {
        return ['New-York' => 'New-York','Los Angeles'=>'Los Angeles'];
    }
}