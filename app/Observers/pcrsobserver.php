<?php

namespace App\Observers;
use Carbon\Carbon;
use App\Models\pcrs;

class pcrsobserver
{
    var $count;
    var $lastdate;
    /**
     * Handle the pcrs "created" event.
     *
     * @param  \App\Models\pcrs  $pcrs
     * @return void
     */
    public function creating(pcrs $pcrs)

    {
        //$date= $pcrs->created_at;
        //$date = Carbon::parse($date);
          $date = Carbon::today();      
         // get all the pcrs created today.
            
            $pcrstoday = pcrs::where('created_at', '>', $date->startOfDay()->toDateTimeString())
            ->where('created_at', '<', $date->endOfDay()->toDateTimeString())
            ->get()->first();
            
            //check to see if there exist a pcr that was created today.
            //if yes find the number of pcrs created today
            if($pcrstoday){
                $count=$pcrstoday->count();
            }
            // if no set the count=1,meaning that this is the first pcr created today
            else{
                $count=1;
            }   
            $stringcount= (string) $count;
            $ident=Carbon::now()->format('d-m-y').'/'.$stringcount;
            //$ident=$date->format('d-m-y').'/'.$stringcount;
            $pcrs->identifier=$ident;
    

        
    }

    /**
     * Handle the pcrs "updated" event.
     *
     * @param  \App\Models\pcrs  $pcrs
     * @return void
     */
    public function updated(pcrs $pcrs)
    {
        //
    }

    /**
     * Handle the pcrs "deleted" event.
     *
     * @param  \App\Models\pcrs  $pcrs
     * @return void
     */
    public function deleted(pcrs $pcrs)
    {
        //
    }

    /**
     * Handle the pcrs "restored" event.
     *
     * @param  \App\Models\pcrs  $pcrs
     * @return void
     */
    public function restored(pcrs $pcrs)
    {
        //
    }

    /**
     * Handle the pcrs "force deleted" event.
     *
     * @param  \App\Models\pcrs  $pcrs
     * @return void
     */
    public function forceDeleted(pcrs $pcrs)
    {
        //
    }
}
