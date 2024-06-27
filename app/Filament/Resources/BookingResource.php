<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingResource\RelationManagers;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make("id_user")->label('ID User')->required(),
                        TextInput::make("id_lapangan")->label('ID Lapangan')->required(),
                        DatePicker::make('tgl_pemesanan')->label('Tanggal Pemesanan')->required(),
                        DatePicker::make('tgl_main')->label('Tanggal Main')->required(),
                        TextInput::make("jam")->required(),
                        Select::make('status')->label('Status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'cancelled' => 'Cancelled',
                            ])->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Nama User')->sortable()->searchable(),
                TextColumn::make('lapangan.nama')->label('Lapangan')->sortable()->searchable(),
                TextColumn::make('tgl_pemesanan')->label('Tanggal Pemesanan')->sortable()->searchable(),
                TextColumn::make('tgl_main')->label('Tanggal Main')->sortable()->searchable(),
                TextColumn::make('jam')->label('Jam')->sortable()->searchable(),
                TextColumn::make('status')->label('Status')->sortable()->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
