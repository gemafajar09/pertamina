# Pertamina

WebApp Tabung Gas

## Installasi plugin matwebsite

    composer require maatwebsite/excel

## Buat file export

    php artisan make:export UserExport --model=Userapp
UserExport adalah nama file export yang akan dibuat dan pastikan awalan huruf besar

--model=Userapp berfungsi untuk menghubungkan file import ke model Appuser atau model yang akan di gunakan

## Publish plugin matwebsite

    php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
