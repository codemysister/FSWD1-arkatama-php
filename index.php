<?php
    $biodata = [
        ['label' => 'Nama', 'value' => 'Deva Apriana'],
        ['label' => 'Tempat, Tanggal Lahir', 'value' => 'Banyumas, 27 April 2002'],
        ['label' => 'Jenis Kelamin', 'value' => 'Laki-laki'],
        ['label' => 'Alamat', 'value' =>  'Jl. Kenanga, Kel. Grendeng, Kec. Purwokerto Utara, Kab. Banyumas'],
        ['label' => 'Pendidikan', 'value' => [
            'Institut Teknologi Telkom Purwokerto (2020 - sekarang)',
            'SMKN 1 Purwokerto (2017 - 2020)'
            ]
        ],
        ['label' => 'hobi', 'value' => 'Kemah, Mancing, dan Gaming']
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <div class="h-screen">
    <div class="flex mx-auto mt-20 w-[80%] h-[80%] gap-4">
        <div class="w-[35%]">
            <img class="h-full rounded-md" src="assets/img/profile.jpg" alt="">
        </div>
        <div class="w-[65%] items-center">
            <div class="relative overflow-x-auto shadow-md rounded-md">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead>
                        <tr>
                            <td colspan="3" class="px-6 py-3 text-white text-center font-bold bg-red-600 rounded-md">
                                Biodata
                            </td>
                            
                        </tr>
                    </thead>
                    <tbody class="">
                        
                        <?php foreach($biodata as $data):?>
                        <tr class="dark:bg-gray-800">
                            <td class="w-[30%] px-6 py-4 font-bold">
                                <?= $data['label'] ?>
                            </td>
                            <td>:</td>
                            <td class="px-6 py-4">
                                <?php if($data['label'] != 'Pendidikan'):?>
                                
                                    <?= $data['value'] ?>
                    
                                <?php else:?>

                                   
                                        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php foreach($data['value'] as $pendidikan):?>
                                            <li>
                                            <?= $pendidikan ?>
                                            </li>
                                            <?php endforeach?>
                                        </ul>
                                       

                                <?php endif;?>
                            </td>
                        </tr>
                        <?php endforeach;?>

                        
                    </tbody>
                </table>
            </div>       
        </div>
    </div>
    </div>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>