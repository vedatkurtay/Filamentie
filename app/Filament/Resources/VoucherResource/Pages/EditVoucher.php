<?php

namespace App\Filament\Resources\VoucherResource\Pages;

use App\Filament\Resources\VoucherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoucher extends EditRecord
{
    protected static string $resource = VoucherResource::class;

    protected function beforeFill()
    {
        if ($this->record->payments()->exists()){
            $this->notify('danger', 'This voucher has been used and cannot be edited.');
            $this->redirect($this->getResource()::getUrl('index'));
        }
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
