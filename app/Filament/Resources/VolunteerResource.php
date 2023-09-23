<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VolunteerResource\Pages;
use App\Filament\Resources\VolunteerResource\RelationManagers;
use App\Models\Volunteer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VolunteerResource extends Resource
{
    protected static ?string $model = Volunteer::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('first_name')->required(),
                        TextInput::make('last_name')->required(),
                        TextInput::make('email')->email()->required(),
                        TextInput::make('primary_number')->tel()->required(),
                        TextInput::make('secondary_number')->tel(),
                        DatePicker::make('dob')->required(),
                        Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'Female' => 'Female',
                                'not_specified' => 'Prefer Not Saying',
                            ])->required(),
                        TextInput::make('address')->required(),
                        RichEditor::make('description')->required(),
                        Select::make('interested_in')
                            ->options([
                                "education" => "Education",
                                "health" => "Health",
                                "environment" => "Environment",
                                "social services" => "Social Services",
                                "human rights" => "Human Rights",
                                "arts and culture" => "Arts and Culture",
                                "animal welfare" => "Animal Welfare",
                                "community development" => "Community Development",
                                "disaster relief" => "Disaster Relief",
                                "international development" => "International Development",
                            ])->required(),
                        FileUpload::make('resume')->disk('volunteer_resume')->openable()->downloadable()->visibility('public')->acceptedFileTypes(['application/pdf']),
                        Toggle::make('status'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')->searchable()->sortable(),
                TextColumn::make('last_name')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('primary_number')->searchable()->sortable(),
                TextColumn::make('description')->limit(50)->html()->wrap()->searchable()->sortable(),
                TextColumn::make('interested_in')->searchable()->sortable(),
                TextColumn::make('gender')->sortable(),
            ])->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListVolunteers::route('/'),
            'create' => Pages\CreateVolunteer::route('/create'),
            'edit' => Pages\EditVolunteer::route('/{record}/edit'),
        ];
    }
}
