<?php

namespace App;

use App\Repositories\RailsbankRespository;
use Illuminate\Database\Eloquent\Model;

class UserTransactions extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'guid',
        'external_service_id', 'external_service_transaction_id',
        'created_at', 'updated_at',
    ];

    /**
     * @return mixed
     */
    public function data()
    {
        return $this->hasOne("App\UserTransactionData", "local_transaction_id", "id");
    }

    /**
     * @return mixed
     */
    public function meta()
    {
        return $this->hasOne("App\UserTransactionMeta", "transaction_id", "id");
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->hasOne("App\User", "id", "user_id");
    }

    /**
     * @param bool $atTime
     * @return mixed|string
     */
    public function getPayeeLedgerAmountAtTime($atTime = false)
    {
        $railsbankRepository = new RailsbankRespository();
        if ($atTime == false) {
            $atTime = $this->created_at;
        }
        try {
            $ledger = $railsbankRepository->getLedgerAtTime($this->data->ledger_from_id, false, true, $atTime);
        } catch (\Exception $e) {
            return "no ledger available";
        }
        return $ledger->amount;
    }

    /**
     * @return string
     */
    public function getPayeeLedgerLocalBalance()
    {
        $railsbankRepository = new RailsbankRespository();
        try {
            return $railsbankRepository->getBalanceForLedger($this->data->ledger_from_id)['localBalance']['value'];
        } catch (\Exception $e) {
            return "no ledger available";
        }
    }

}
