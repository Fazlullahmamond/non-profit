<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = "Social";
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Title')
                            ->columnSpan(4)
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('event_type')
                            ->required()
                            ->columnSpan(2)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('capacity')
                            ->columnSpan(2)
                            ->numeric(),
                        Forms\Components\DateTimePicker::make('start_date')
                            ->columnSpan(2)
                            ->required(),
                        Forms\Components\DateTimePicker::make('end_date')
                            ->columnSpan(2)
                            ->required(),

                        Forms\Components\DateTimePicker::make('registers_deadline')
                            ->columnSpan(2),
                        Forms\Components\TextInput::make('organizer')
                            ->columnSpan(2)
                            ->maxLength(255),

                        Forms\Components\Textarea::make('address')
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('descriptions')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('image')
                            ->disk('event')->imageEditor()->visibility('public')
                            ->columnSpan(4)
                            ->image(),
                        Forms\Components\Toggle::make('status')
                            ->columnSpan(4)
                            ->required(),
                    ])
                    ->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('event_type')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->numeric()
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registers_deadline')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('organizer')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular()->defaultImageUrl(url('/storage/default/default.png'))
                    ->disk('event'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
