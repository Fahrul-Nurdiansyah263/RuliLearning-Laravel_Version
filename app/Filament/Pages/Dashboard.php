<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use App\Filament\Widgets\StatsOverview;
use Filament\Forms\Get;

class Dashboard extends BaseDashboard
{
    use BaseDashboard\Concerns\HasFiltersForm;

    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $title = 'Dashboard';

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('startDate')
                    ->label('Start Date')
                    ->default(now()->startOfMonth())
                    ->maxDate(fn (Get $get)=> $get('endDate') ?:now()),
                DatePicker::make('endDate')
                    ->label('End Date')
                    ->default(now())
                    ->minDate(fn (Get $get) => $get('startDate')),
            ]);
    }

    public function getHeaderWidgets(): array
    {
        return [
            AccountWidget::class,
            FilamentInfoWidget::class,
        ];
    }
    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}