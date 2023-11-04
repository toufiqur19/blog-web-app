<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdServiceResource\Pages;
use App\Filament\Resources\AdServiceResource\RelationManagers;
use App\Models\AdService;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdServiceResource extends Resource
{
    protected static ?string $model = AdService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('short_desc')->label('Short_Desc (max 34 words)')->required(),
                MarkdownEditor::make('description')->required(),
                FileUpload::make('image'),
                DatePicker::make('published_at'),
                Checkbox::make('published')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->searchable(),
                TextColumn::make('title'),
                CheckboxColumn::make('published'),
                TextColumn::make('short_desc')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListAdServices::route('/'),
            'create' => Pages\CreateAdService::route('/create'),
            'edit' => Pages\EditAdService::route('/{record}/edit'),
        ];
    }    
}
