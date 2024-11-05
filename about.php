<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>

<body>
    <span class="fade1"></span>
    <span class="fade2"></span>


    <section class="port">
        <div class="port-left">
            <h1>Hello! I am a Web <span>Designer</span> and <br> <span class="multi-text"></span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa beatae quo voluptatem dolorem, dicta fuga
                ab iure rem, sed minima reiciendis. Debitis sed animi, officiis placeat!.
            </p>

            <button>Get Started <i class="fa-solid fa-arrow-right"></i></button>
        </div>

        <img src="port.png" alt="#">

    </section>

    <script>
        const typed = new Typed(".multi-text", {
            strings: ["Programmer", "Developer", "Coder"],
            typeSpeed: 70,
            backSpeed: 70,
            backDelay: 1000,
            loop: true,
        });
    </script>

</body>

</html>