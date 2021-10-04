<?php

namespace App\Events;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class HelloPusherEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $date;
  
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->message  = $request->full_name;
        $this->date = Carbon::now()->minute();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        
        return ['my-channel'];
        //  return redirect()->route('order.index');
    }
}
