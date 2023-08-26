<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApprenantResource\Pages;
use App\Filament\Resources\ApprenantResource\RelationManagers;
use App\Models\Apprenant;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApprenantResource extends Resource
{
    protected static ?string $model = Apprenant::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListApprenants::route('/'),
            'create' => Pages\CreateApprenant::route('/create'),
            'edit' => Pages\EditApprenant::route('/{record}/edit'),
        ];
    }    
}
