<?php

namespace Laraveles\Rating\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Laraveles\Rating\Contracts\Qualifier;
use Laraveles\Rating\Contracts\Rateable;

class ModelUnrated
{
    use Dispatchable, SerializesModels;

    /** @var Qualifier */
    private Qualifier $qualifier;
    /** @var Rateable */
    private Rateable $rateable;

    public function __construct(Qualifier $qualifier, Rateable $rateable)
    {
        $this->qualifier = $qualifier;
        $this->rateable = $rateable;
    }

    public function getQualifier(): Qualifier
    {
        return $this->qualifier;
    }

    public function getRateable(): Rateable
    {
        return $this->rateable;
    }
}
