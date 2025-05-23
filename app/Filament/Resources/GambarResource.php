<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GambarResource\Pages;
use App\Filament\Resources\GambarResource\RelationManagers;
use App\Models\Gambar;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GambarResource extends Resource
{
    protected static ?string $model = Gambar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('gambar') // Disimpan di storage/app/public/kegiatan
                    ->disk('public') // Penting!
                    ->visibility('public')
                    ->required(),
                Select::make('tag_id')
                    ->label('Tag')
                    ->options(\App\Models\Tag::all()->pluck('nama', 'id'))
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->disk('public')
                    ->height(100)
                    ->width(100),
                SelectColumn::make('tag_id')
                    ->label('Tag')
                    ->options(\App\Models\Tag::all()->pluck('nama', 'id')),
            ])
            ->filters([
                Filter::make('tag_id')
                    ->form([
                        Select::make('tag_id')
                            ->label('Pilih Tag')
                            ->options(\App\Models\Tag::all()->pluck('nama', 'id'))
                            ->searchable(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['tag_id'],
                            fn ($query, $tagId) => $query->where('tag_id', $tagId)
                        );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Gambar'; // Label di sidebar
    }
    public static function getPluralModelLabel(): string
    {
        return 'Gambar'; // atau tetap 'Gambar' jika ingin tunggal
    }
    public static function getModelLabel(): string
    {
        return 'Gambar';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGambars::route('/'),
            'create' => Pages\CreateGambar::route('/create'),
            'edit' => Pages\EditGambar::route('/{record}/edit'),
        ];
    }
}
