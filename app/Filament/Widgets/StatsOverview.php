<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Transaksi;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;
use Carbon\Carbon;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = $this->filters['startDate'] ?? now()->startOfMonth()->toDateString();
        $endDate = $this->filters['endDate'] ?? now()->toDateString();

        $carbonStartDate = Carbon::parse($startDate);
        $carbonEndDate = Carbon::parse($endDate);

        $query = Transaksi::whereBetween('created_at', [$carbonStartDate->startOfDay(), $carbonEndDate->endOfDay()])
            ->where('status', 'success');

        $totalTransaksi = $query->clone()->count();
        $totalPemasukan = $query->clone()->sum('harga');

        $dateLabel = $carbonStartDate->isSameDay($carbonEndDate)
            ? $carbonStartDate->format('d F Y')
            : $carbonStartDate->format('d M Y') . '-' . $carbonEndDate->format('d M Y');

        return [
                Stat::make('Transaksi Sukses (' . $dateLabel . ')', Number::format($totalTransaksi))
                    ->description('Jumlah transaksi sukses pada tanggal yang dipilih')
                    ->descriptionIcon('heroicon-m-check-badge')
                    ->color('info'),

                Stat::make('Pemasukan (' . $dateLabel . ')', 'Rp' . Number::format($totalPemasukan))
                    ->description('Pemasukan dari transaksi sukses')
                    ->descriptionIcon('heroicon-m-currency-dollar')
                    ->color('success'),

                Stat::make('Total User', Number::format(User::count()))
                    ->description('Total pengguna yang terdaftar')
                    ->descriptionIcon('heroicon-m-users')
                    ->color('warning'),
            ];
        }
}