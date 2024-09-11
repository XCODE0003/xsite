<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use getID3;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $getID3 = new getID3;
        $file = $getID3->analyze(storage_path('app/public/' . $data['file_video']));
        $duration = $file['playtime_seconds'];

        $duration_string = gmdate("i:s", $duration);
        $data['timeline'] = $duration_string;
        return parent::mutateFormDataBeforeCreate($data); // TODO: Change the autogenerated stub
    }
}