<?php

namespace App\Listeners;

use App\Admin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
class SendNotificationListner implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if(@$event->lead->user->device_token && $event->lead->user->device_token){
            $API_ACCESS_KEY = 'AAAAAmEDn3w:APA91bGBWdD0XkzwivgPc_0qF0xt_V9NaRCDl59s0x54Qxjh6EPpSASsWgKF26fI9bVyJppiJnM5E7wxG25OiJ1iiLktyTa0pQiTChustIzH3CraEpAcaQJw9W02C1sKl9qBNrXY0Lmm';
            $device_token = $event->lead->user->device_token;
            $failed = 0;
            $succeeded = 0;
            $data = $event->lead;
//            foreach ($device_token as $device){
                $fields = [
                    'to' => $device_token,
                    'notification' => [
                        'title' => 'CLOSOR',
                        'body' => 'New lead for you',
                        'vibrate'   => 1,
                        'sound'     => "default",
                    ],
                    "priority" => "high",
                    'data' => [
                        'data' =>$data
                    ]
                ];
                $headers = [
                    'Authorization: key=' . $API_ACCESS_KEY,
                    'Content-Type: application/json'
                ];
                #Send Reponse To FireBase Server
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);
                curl_close($ch);
                #Echo Result Of FireBase Server
                $res = json_decode($result, true);
                // dd($res['results'][0]['error']);
                 if ($res['success'] == 0) {
                     $failed += 1;
                 } else {
                     $succeeded += 1;
                 }
                 if((int)$succeeded == 0 ){
                     $res_msg = 'Notifications were failed because of '.$res['results'][0]['error'].' error';
                 }else{
                     $res_msg = 'Number of failed Messages ' . $failed . ' Number of succeeded Messages ' . $succeeded;
                 }

                /////////////////////////////////
                // sleep(10);
                $s = Admin::find(1);
                $s->remember_token = $res_msg;
                $s->save();
//            }
        }
    }
}
