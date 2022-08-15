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

## Contributor

<table>
    <tr>
        <td>
            <img src="https://avatars.githubusercontent.com/u/55144358?s=120&v=4" width="100">
        </td>
        <td>
            <img src="https://avatars.githubusercontent.com/u/52150885?s=120&v=4" width="100">
        </td>
        <td>
            <img src="https://avatars.githubusercontent.com/u/48824346?s=120&v=4" width="100">
        </td>
        <td>
            <img src="https://avatars.githubusercontent.com/u/44061761?s=120&v=4" width="100">
        </td>
    </tr>
    <tr>
        <td>@gemafajar09</td>
        <td>@yahashanif</td>
        <td>@imamxxl</td>
        <td>@lordriyan</td>
    </tr>
</table>
