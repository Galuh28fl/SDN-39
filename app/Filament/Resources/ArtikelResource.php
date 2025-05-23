<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                ->required(),

            DatePicker::make('tanggal')
                ->required(),

            FileUpload::make('image')
                ->image()
                ->directory('artikel')
                ->disk('public')
                ->visibility('public')
                ->required(),

            MarkdownEditor::make('deskripsi')
                ->maxLength(255)
                ->label('Deskripsi Singkat (max. 255 Karakter)')
                ->required(), // agar lebih jelas

            RichEditor::make('content')
                ->label('Konten Lengkap')
                ->required() // untuk kejelasan juga
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->disk('public')
                    ->width(100)
                    ->height(100),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->date()
            ])
            ->filters([
                Filter::make('tanggal')
                ->form([
                    DatePicker::make('tanggal'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when($data['tanggal'], fn ($q, $tanggal) => $q->whereDate('tanggal', $tanggal));
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
        return 'Artikel'; // Label di sidebar
    }
    public static function getPluralModelLabel(): string
    {
        return 'Artikel'; // atau tetap 'Artikel' jika ingin tunggal
    }
    public static function getModelLabel(): string
    {
        return 'Artikel';
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
