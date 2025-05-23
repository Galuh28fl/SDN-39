<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanResource\Pages;
use App\Filament\Resources\KegiatanResource\RelationManagers;
use App\Models\Kegiatan;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;

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
                ->directory('kegiatan')
                ->disk('public')
                ->visibility('public')
                ->required(),
            
            Select::make('tag_id')
                ->label('Tag')
                ->options(\App\Models\Tag::all()->pluck('nama', 'id'))
                ->searchable()
                ->required(),

            MarkdownEditor::make('deskripsi')
                ->maxLength(255)
                ->label('Deskripsi Singkat (max. 255 Karakter)')
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
                SelectColumn::make('tag_id')
                    ->label('Tag')
                    ->options(\App\Models\Tag::all()->pluck('nama', 'id')),
                TextColumn::make('judul')
                    ->searchable(), // 👈 searchable judul
                TextColumn::make('tanggal')
                    ->date()
            ])
            ->filters([
                Filter::make('tanggal')
                ->form([
                    DatePicker::make('tanggal')
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query->when(
                        $data['tanggal'],
                        fn ($query, $tanggal) => $query->whereDate('tanggal', $tanggal)
                    );
                }),
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
        return 'Kegiatan'; // Label di sidebar
    }
    public static function getPluralModelLabel(): string
    {
        return 'Kegiatan'; // atau tetap 'Kegiatan' jika ingin tunggal
    }
    public static function getModelLabel(): string
    {
        return 'Kegiatan';
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKegiatans::route('/'),
            'create' => Pages\CreateKegiatan::route('/create'),
            'edit' => Pages\EditKegiatan::route('/{record}/edit'),
        ];
    }
}
