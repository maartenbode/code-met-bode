<?php

namespace App\Console\Commands;

use App\Contact;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendDailyBirthdayNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-birthday-notifications {--date=}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = now();

        if ($this->option('date')) {
            $date = Carbon::createFromFormat('Y-m-d', $this->option('date'));
        }

        $contacts = Contact::all()->filter(function (Contact $contact) use ($date) {
            if (empty($contact->birthday)) {
                return false;
            }

            return $contact->birthday->isBirthday($date);
        });

        foreach ($contacts as $contact) {
            $this->line($contact->full_name);
        }
    }
}
