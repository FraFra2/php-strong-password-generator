<?php 
require_once ("./function.php");
$lunghezzaDesiderata = $_GET["passLen"] ?? 16;
$num = isset($_GET["num"]) ? true : false;
$lett = isset($_GET["lett"]) ? true : false;
$spec = isset($_GET["spec"]) ? true: false;
$stringaGenerata = generaStringaCasuale($lunghezzaDesiderata, $num, $lett, $spec);



?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class = "drop-shadow-xl bg-slate-700 text-white">
    <div class = "container mx-auto">
        <div class = "text-center py-8">
            <h1 class = "text-4xl">
                Strong Password Gen
            </h1>
            <h2 class = "text-xl">
                Genera una password sicura!
            </h2>
        </div>
        <div class = "drop-shadow-xl bg-slate-400 p-6 rounded-md mb-8">
            Inserire i parametri di generazione.
        </div>
        <div class = "drop-shadow-xl bg-slate-400 rounded-md p-6">
            <form action="index.php" method="get">
                <div class = "pb-4">
                    <label class = "text-xl" for="passLen">Inserire lunghezza password:</label>
                    <input class = "text-center py-1 pl-8 mx-8 rounded-md text-black" min = "1" max = "32" value = "8" type="number" name="passLen" id="passLen">
                </div>
                <div class = "flex flex-col gap-y-2">
                    <div>
                        <label class = "text-xl" for="lett">Lettere:</label>
                        <input type="checkbox" class = "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" name="lett" id="lett">
                    </div>
                    
                    <div>
                        <label class = "text-xl" for="num">Numeri:</label>
                        <input type="checkbox" class = "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" name="num" id="num">
                    </div>

                    <div>
                        <label class = "text-xl" for="spec">Caratteri Speciali:</label>
                        <input type="checkbox" class = "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" name="spec" id="spec">
                    </div>
                    
                </div>
                <button class = "drop-shadow-xl rounded-md bg-slate-700 px-4 py-2" type="submit">Invia</button>
            </form>
        </div>
        <div class = "drop-shadow-xl text-6xl rounded-md py-4 my-4 flex justify-center items-center bg-slate-400">
            <h1><?php echo $stringaGenerata; ?></h1>
        </div>
    </div>
</body>
</html>