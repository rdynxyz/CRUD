<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body class="text-white bg-slate-800 min-h-screen">

    <nav class="w-full h-20 bg-slate-900">
        <div class="container h-full m-auto flex items-center justify-center">
            <h1 class="text-2xl font-bold text-white">PHP Complete CRUD Application</h1>
        </div>
    </nav>

    <section class="container m-auto pt-20">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo 
            '<div id="alert-4" class="flex p-4 mb-4 bg-green-400 rounded-lg" role="alert">
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-white">
                '.$msg.'
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-500 text-white rounded-lg p-1.5 hover:bg-green-600 inline-flex h-8 w-8" data-dismiss-target="#alert-4" aria-label="Close">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </div>';
        }
        ?>
        <a href="add_new.php" class="text-white bg-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:hover:bg-gray-500 dark:focus:ring-gray-700 dark:border-gray-700">ADD NEW</a>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 ">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            First Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Last Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Gender
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $row['id'] ?>
                            </th>
                            <td class="py-4 px-6">
                                <?php echo $row['first_name'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <?php echo $row['last_name'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <?php echo $row['email'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <?php echo $row['gender'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="font-medium text-white"><i class="fa-solid fa-pen-to-square mr-4"></i></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="font-medium text-white"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>



    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>