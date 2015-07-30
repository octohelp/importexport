<?php
namespace Octohelp\Importexport\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class EntriesImport extends \Backend\Models\ImportModel
{
    protected $rules = [];
    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {

            try {
                $entry = Entry::findOrFail($data['id']);
                $entry->fill($data);
                $entry->save();
                $this->logUpdated();
            }
            catch (ModelNotFoundException $ex) {
                $entry = new Entry;
                $entry->fill($data);
                $entry->save();
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