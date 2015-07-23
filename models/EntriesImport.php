<?php
namespace Acme\Importexport\Models;
class EntriesImport extends \Backend\Models\ImportModel
{
    protected $rules = [];
    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {

            try {
                $subscriber = new Entries;
                $subscriber->fill($data);
                $subscriber->save();
                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
    public function getCityOptions($keyValue = null) {
        return ['New-York' => 'New-York','Los Angeles'=>'Los Angeles'];
    }
}