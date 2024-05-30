<?php

namespace RLI\Booking\Commands;

use Illuminate\Console\Command;

class BookingCommand extends Command
{
    public $signature = 'booking';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
