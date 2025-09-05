<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriMateriResource\Pages;
use App\Filament\Resources\KategoriMateriResource\RelationManagers;
use App\Models\KategoriMateri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Get;
use Illuminate\Support\Str;

class KategoriMateriResource extends Resource
{
    protected static ?string $model = KategoriMateri::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Kategori Materi';
    protected static ?string $navigationGroup = 'Materi';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_premium')
                    ->required()
                    ->live(),

                Forms\Components\TextInput::make('harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->required()
                    ->visible(fn (Get $get): bool => $get('is_premium')),

                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->imageEditor(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\IconColumn::make('is_premium')->boolean(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('harga')
                
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriMateris::route('/'),
            'create' => Pages\CreateKategoriMateri::route('/create'),
            'edit' => Pages\EditKategoriMateri::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
