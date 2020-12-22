<?php

namespace App\Listeners;

use App\Admin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
class SendNotificationListner
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
            $data = $event->lead;
//            foreach ($device_token as $device){
                $fields = [
                    'to' => $device_token,
                    'notification' => [
                        'title' => 'CLOSOR',
                        'body' => 'New lead for you',
                        'vibrate'   => 1,
                        'sound'     => "default",
                        'click_ action'=>'FCM_PLUGIN_ACTIVITY'

                    ],
                    "priority" => "high",
                    'data' => [
                        'data' =>$data,
                        "landing_page"=>"second",
                        "price"=>"$3,000.00"
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
                 return $res;
//            }
        }
    }
}
