<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;


class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Masjid Nasrun Minallah');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.allow_questions', false);
        $this->migrator->add('general.is_live', false);
    }
}
