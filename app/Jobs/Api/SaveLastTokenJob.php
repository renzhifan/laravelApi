<?php

namespace App\Jobs\Api;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SaveLastTokenJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $model;
    protected $token;

    /**
     * SaveLastTokenJob constructor.
     * @param $model
     * @param $token
     */

    public function __construct($model,$token)
    {
        //
        $this->model=$model;
        $this->token=$token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user=$this->model;
        $user->last_token=$this->token;
        $user->save();
//        \Log::info($this->token.'/'.$this->model);
//        $this->model->last_token = $this->token;
//        $this->model->save();
    }
}