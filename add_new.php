<?php

include "db_conn.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }
}

?>


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
        <h1 class="text-center text-2xl font-bold">Add New User</h1>
        <p class="text-center ">Complete the form below to add a new user</p>
        <form action="" method="post" class="flex flex-col justify-center w-[620px] m-auto mt-16">
            <div class="flex gap-5 w">
                <div class="flex flex-col">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="Alexander" class="rounded-md h-8 w-[300px] border-gray-300 mt-1 capitalize text-slate-700" required>
                </div>
                <div class="flex flex-col">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="Bounou" class="rounded-md h-8 w-[300px] border-gray-300 mt-1 capitalize text-slate-700" required>
                </div>
            </div>
            <div class="flex flex-col w-full mt-4">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="alexan@gmail.com" class="rounded-md h-8 w-full border-gray-300 mt-1 text-slate-700" required>
            </div>
            <div class="mt-4">
                <label>Gender :</label> &nbsp;
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="male">Female</label>
            </div>
            <div class="button mt-4">
                <button type="submit" name="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                <a href="index.php" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</a>
            </div>
        </form>
    </section>



    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>