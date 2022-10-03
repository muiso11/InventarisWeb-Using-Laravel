<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
    <title></title>
    </head>
    <body>
        <h1>Data Inventaris Barang Manajemen {{ $active }}</h1>
        <table id="customers">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>     
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>
                        {{ $nomor++ }}
                    </td>
                    <td>
                        {{$data->nama}}
                    </td>
                    <td>
                        {{$data->jumlah}}
                    </td>
                    <td>
                        {{$data->keterangan}}
                    </td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>