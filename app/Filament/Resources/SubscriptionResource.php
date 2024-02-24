<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Laravel\Cashier\Subscription as CashierSubscription;

class SubscriptionResource extends Resource
{
    protected static ?string $model = CashierSubscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             //
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('stripe_id')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),  Tables\Columns\TextColumn::make('stripe_status')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),  Tables\Columns\TextColumn::make('stripe_price')
                    ->searchable()
                    ->money('gbp', 10)
                    ->sortable()
                    ->toggleable(),  Tables\Columns\TextColumn::make('quantity')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                    Tables\Columns\TextColumn::make('trial_ends_at')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('trial_ends_at')
                    ->searchable()
                    ->sortable()
                    ->toggleable(), Tables\Columns\TextColumn::make('ends_at')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ])
            ->emptyStateActions([
                // Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListSubscriptions::route('/'),
            // 'create' => Pages\CreateSubscription::route('/create'),
            // 'edit' => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }
}
