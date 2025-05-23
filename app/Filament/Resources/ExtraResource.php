<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExtraResource\Pages;
use App\Filament\Resources\ExtraResource\RelationManagers;
use App\Models\Extra;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExtraResource extends Resource
{
    protected static ?string $model = Extra::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('ExtraKurikuler') // Disimpan di storage/app/public/kegiatan
                    ->disk('public')
                    ->visibility('public')
                    ->required(),

                TextInput::make('judul')
                    ->required()
                    ->label('Judul Kegiatan'),

                MarkdownEditor::make('deskripsi')
                    ->required()
                    ->label('Deskripsi Kegiatan (max. 255 Karakter)'),

                TextInput::make('ketentuan')
                    ->required()
                    ->label('Ketentuan Kelas (format: Kelas [Range / ... , ...])'),

                TextInput::make('siswa')
                    ->integer()
                    ->label('Jumlah Siswa')
                    ->required(),

                TextInput::make('jadwal')
                    ->label('Jadwal Kelas (Hari Apa)')
                    ->required(),

                TextInput::make('waktu')
                    ->label('Waktu Kelas (format xx:xx-yy:yy)')
                    ->required(),

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
            ])
            ->filters([
            
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
        return 'EkstraKurikuler'; // Label di sidebar
    }
    public static function getPluralModelLabel(): string
    {
        return 'EkstraKurikuler'; // atau tetap 'Kegiatan' jika ingin tunggal
    }
    public static function getModelLabel(): string
    {
        return 'EkstraKurikuler';
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExtras::route('/'),
            'create' => Pages\CreateExtra::route('/create'),
            'edit' => Pages\EditExtra::route('/{record}/edit'),
        ];
    }
}
