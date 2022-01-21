<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Storage;

class ProcessLogRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $storage;
    public $logEntry;

    /**
     * Create a new job instance.
     * @param string
     * @param array
     * @return void
     */
    public function __construct($storage, $logEntry)
    {
        $this->storage = $storage;
        $this->logEntry = $logEntry;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $logJson = json_encode($this->logEntry);

        $fileName = "Audit/{$this->storage}/audit-".date('Y-m-d').".log";

        Storage::disk('s3')->append($fileName, $logJson);

        return true;
    }
}
