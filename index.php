<?php 
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed ');
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert) {
        $message[] = 'appointment made successfully!';
    } else{
        $message[] = 'appointment failed';
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css files -->
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/style.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>
</head>
<body class="font-Poppins overflow-x-hidden scroll-smooth scroll-pt-24 text-50% md:text-55% lg:text-62.5% capitalize outline-none box-border">
    <!-- header section -->
    <header class=" py-8 header border-b-0.2 border-b-borderColor border-solid shadow-2xl sticky top-0 left-0 w-full z-50 backdrop-blur-sm"> 
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <a href="#home" class="logo text-2 text-myBlack">nour
                    <span class="text-myblue">medical</span>
                </a>
                
                <nav class="nav absolute top-[99%] left-0 right-0 border-t-borderColor border-t-0.2
                border-solid border-b-0.2 border-borderColor md:static md:border-none text-center md:text-start py-4 md:py-0 flex flex-row ease-linear duration-300 bg-bginherit">
                    <a href="#home" class="mx-6  text-1 text-myBlack hover:text-myblue transition-all">
                        home
                    </a>

                    <a href="#about" class="mx-6 text-1 text-myBlack hover:text-myblue transition-all">
                        about
                    </a>

                    <a href="#services" class="mx-6  text-1 text-myBlack hover:text-myblue transition-all">
                        services
                    </a>

                    <a href="#reviews" class="mx-6  text-1 text-myBlack hover:text-myblue transition-all">
                        reviews
                    </a>

                    <a href="#contact" class="mx-6  text-1 text-myBlack hover:text-myblue transition-all">
                        contact
                    </a>
                </nav>

                <a href="#contact" class="btn hidden lg:inline-block  py-4 px-6 rounded-lg bg-myblue text-myWight text-1 hover:bg-myBlack hover:text-myblue transition-all duration-300 shadow-2xl ">
                    make appoointment
                </a>

                <div id="btnMenu" onclick="clicked()" class=" fa-solid fa-bars text-2 text-myBlack cursor-pointer ease-linear duration-300">
                    
                </div>
            </div>
        </div>
    </header>
    <!-- header section -->

    <!-- home section -->
    <section id="home" class="home  bg-cover bg-no-repeat bg-left md:bg-center bg-hero bg-fixed">
        <div class="container mx-auto py-4">
            <div class="flex min-h-screen items-center justify-center">
                <div class="content text-center md:px-8 md:text-left w-auto md:w-50">
                    <h1 class="text-2 font-extrabold uppercase text-myblue">let us brighten your smile</h1>

                    <p class="my-5 text-1 leading-loose text-lightColor py-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos perspiciatis sint ex quaerat quas delectus assumenda, saepe deleniti cum architecto itaque repellat tempora dolores perferendis minus, non tenetur praesentium maiores.</p>

                    <a href="#contact" class="btn inline-block  py-4 px-6 rounded-lg bg-myblue text-myWight text-1 hover:bg-myBlack hover:text-myblue transition-all duration-300 shadow-2xl ">
                        make appoointment
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section -->
    
    <!-- about section -->
    <section class="about bg-abuot bg-top bg-no-repeat bg-cover min-h-80 flex items-center justify-center" id="about">
        
            <div class="w-full md:w-50 px-6 text-center md:text-left">               
                <span class="text-2 text-myblue text-center block my-8 font-semibold ">
                    about us
                </span>

                <h3 class="text-myBlack text-2 font-medium">
                    true healhcare for your family
                </h3>

                <p class="text-lightColor leading-loose text-0.9 my-8 pr-8">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, voluptates cupiditate ullam quisquam maxime reprehenderit fugit necessitatibus corrupti, ut saepe aliquid aliquam exercitationem, fuga molestias.
                </p>

                <a href="#contact" class="btn inline-block mb-8  py-4 px-6 rounded-lg bg-myblue text-myWight text-1 hover:bg-myBlack hover:text-myblue transition-all duration-300 shadow-2xl ">
                    make appoointment
                </a>                           
            </div>
        
    </section>
    <!-- about section -->

    <!-- services section -->
    <section id="services" class="services bg-lightBg py-8">
        <h1 class="text-2 text-myblue font-bold text-center mb-8">our services</h1>
        <div class="box-container container mx-auto w-90 grid grid-cols-20 gap-8">

            <div class="max-[320px]:w-90 box text-center p-8 bg-myWight shadow-2xl hover:translate-x-2 hover:translate-y-2 transition duration-300 ease-linear hover:bg-opacityWhite rounded-lg cursor-pointer">
                <img src="./assets/imges/alignment specialist.png" alt="" class="w-16 inline-block my-4 h-16">
                <h3 class="text-1.5 font-medium text-myBlack py-4">alignment specialist</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</p>
            </div>

            <div class="max-[320px]:w-90 box text-center p-8 bg-myWight shadow-2xl hover:translate-x-2 hover:translate-y-2 transition duration-300 ease-linear hover:bg-opacityWhite rounded-lg cursor-pointer">
                <img src="./assets/imges/cosmetic dentistry.png" alt="" class="w-16 inline-block my-4 h-16">
                <h3 class="text-1.5 font-medium text-myBlack py-4">cosmetic dentistry</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</p>
            </div>

            <div class="max-[320px]:w-90 box text-center p-8 bg-myWight shadow-2xl hover:translate-x-2 hover:translate-y-2 transition duration-300 ease-linear hover:bg-opacityWhite rounded-lg cursor-pointer">
                <img src="./assets/imges/oral hygiene experts.png" alt="" class="w-16 inline-block my-4 h-16">
                <h3 class="text-1.5 font-medium text-myBlack py-4">oral hygiene experts</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</p>
            </div>

            <div class="max-[320px]:w-90 box text-center p-8 bg-myWight shadow-2xl hover:translate-x-2 hover:translate-y-2 transition duration-300 ease-linear hover:bg-opacityWhite rounded-lg cursor-pointer">
                <img src="./assets/imges/root canal specialist.png" alt="" class="w-16 inline-block my-4 h-16">
                <h3 class="text-1.5 font-medium text-myBlack py-4">root canal specialist</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</p>
            </div>

            <div class="max-[320px]:w-90 box text-center p-8 bg-myWight shadow-2xl hover:translate-x-2 hover:translate-y-2 transition duration-300 ease-linear hover:bg-opacityWhite rounded-lg cursor-pointer">
                <img src="./assets/imges/live dental advisory.png" alt="" class="w-16 inline-block my-4 h-16">
                <h3 class="text-1.5 font-medium text-myBlack py-4">live dental advisory</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</p>
            </div>

            <div class="max-[320px]:w-90 box text-center p-8 bg-myWight shadow-2xl hover:translate-x-2 hover:translate-y-2 transition duration-300 ease-linear hover:bg-opacityWhite rounded-lg cursor-pointer">
                <img src="./assets/imges/cavity inspection.png" alt="" class="w-16 inline-block my-4 h-16">
                <h3 class="text-1.5 font-medium text-myBlack py-4">cavity inspection</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</p>
            </div>

        </div>
    </section>
    <!-- services section -->

    <!-- process section -->
    <section class="process py-8">
        <h1 class="text-2 font-bold text-center my-8">work process</h1>
        <div class="box-container container mx-auto w-90 grid grid-cols-20 gap-8">

            <div class="max-[320px]:w-90 box bg-myblue p-8 rounded-lg text-center shadow-2xl">
                <img class="w-80 mx-auto h-80" src="./assets/imges/cosmetic_dentistry-removebg-preview.png" alt="">
                <h3 class="text-1.5 font-medium text-myBlack py-4">cosmetic dentistry</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet praesentium commodi nostrum possimus mollitia corrupti!</p>
            </div>

            <div class="max-[320px]:w-90 box bg-myblue p-8 rounded-lg text-center shadow-2xl">
                <img class="w-80 mx-auto h-80" src="./assets/imges/pediatric_dentistry-removebg-preview.png" alt="">
                <h3 class="text-1.5 font-medium text-myBlack py-4">pediatric dentistry</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet praesentium commodi nostrum possimus mollitia corrupti!</p>
            </div>

            <div class="max-[320px]:w-90 box bg-myblue p-8 rounded-lg text-center shadow-2xl">
                <img class="w-80 mx-auto h-80" src="./assets/imges/implants-removebg-preview.png" alt="">
                <h3 class="text-1.5 font-medium text-myBlack py-4">dental implants</h3>
                <p class="text-1 text-lightColor leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet praesentium commodi nostrum possimus mollitia corrupti!</p>
            </div>

        </div>
    </section>
    <!-- process section -->
     
    <!-- reviews section -->
    <section class="reviews py-8 bg-lightBg" id="reviews">
        <h1 class="text-2 font-bold text-center my-8">staisfied clients</h1>

        <div class="box-container container mx-auto w-90 grid grid-cols-20 gap-8">

            <div class="max-[320px]:w-90 box p-8 rounded-lg text-center shadow-2xl bg-myWight">
                <img class="w-40 rounded-full mx-auto h-40" src="./assets/imges/person1.jpg" alt="">
                
                <p class="text-1 text-lightColor leading-loose py-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet praesentium commodi nostrum possimus mollitia corrupti!</p>
                <div class="stars px-6 py-2 rounded-lg bg-lightBg mb-8 inline-block">
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star-half-alt text-1.5 text-myblue"></i>
                </div>
                <h3 class="text-1.5 text-myBlack font-semibold">amer</h3>
                <span class="text-lightColor text-1">staisfied clients</span>
            </div>

            <div class="max-[320px]:w-90 box p-8 rounded-lg text-center shadow-2xl bg-myWight">
                <img class="w-40 rounded-full mx-auto h-40" src="./assets/imges/person2.jpg" alt="">
                
                <p class="text-1 text-lightColor leading-loose py-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet praesentium commodi nostrum possimus mollitia corrupti!</p>
                <div class="stars px-6 py-2 rounded-lg bg-lightBg mb-8 inline-block">
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star-half-alt text-1.5 text-myblue"></i>
                </div>
                <h3 class="text-1.5 text-myBlack font-semibold">omer</h3>
                <span class="text-lightColor text-1">staisfied clients</span>
            </div>

            <div class="max-[320px]:w-90 box p-8 rounded-lg text-center shadow-2xl bg-myWight">
                <img class="w-40 rounded-full mx-auto h-40" src="./assets/imges/person3.jpg" alt="">
                
                <p class="text-1 text-lightColor leading-loose py-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet praesentium commodi nostrum possimus mollitia corrupti!</p>
                <div class="stars px-6 py-2 rounded-lg bg-lightBg mb-8 inline-block">
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star text-1.5 text-myblue"></i>
                    <i class="fas fa-star-half-alt text-1.5 text-myblue"></i>
                </div>
                <h3 class="text-1.5 text-myBlack font-semibold">saly</h3>
                <span class="text-lightColor text-1">staisfied clients</span>
            </div>

        </div>
    </section>
    <!-- reviews section -->

    <!-- contact section -->
    <section class="contact" id="contact">
        <h1 class="text-2 font-bold text-center my-8">make appoointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="rounded-lg bg-lightBg p-8 mx-auto max-w-3xl">
        <?php
        if(isset($message)){
            //
            foreach ($message as $message) {
                 echo '<p class="message mb-8 rounded-lg bg-myblue px-4 py-5 text-1.5 text-myWight text-center">'.$message.'</p>';
            }
        };
        ?>
            <label for="name" class="text-1.5 text-myBlack ">your name:</label>
            <input type="text" name="name" id="name" class="box w-full mt-4 mb-8 rounded-lg bg-myWight text-1.5 py-5 px-6 text-myBlack normal-case" autocomplete="off" placeholder="enter your name" required>
            <label for="email" class="text-1.5 text-myBlack ">your email</label>
            <input type="email" name="email" id="email" class="box w-full mt-4 mb-8 rounded-lg bg-myWight text-1.5 py-5 px-6 text-myBlack normal-case" autocomplete="off" placeholder="enter your email" required>
            <label for="number" class="text-1.5 text-myBlack ">your number</label>
            <input type="number" name="number" id="number" class="box w-full mt-4 mb-8 rounded-lg bg-myWight text-1.5 py-5 px-6 text-myBlack normal-case" autocomplete="off" placeholder="enter your number" required>
            <label for="date" class="text-1.5 text-myBlack ">appoointment date</label>
            <input type="datetime-local" name="date" id="date" class="box w-full mt-4 mb-8 rounded-lg bg-myWight text-1.5 py-5 px-6 text-myBlack normal-case" autocomplete="off" required>
            
            <input type="submit" class="btn inline-block mb-8  py-4 px-6 rounded-lg bg-myblue text-myWight text-1 hover:bg-myBlack hover:text-myblue transition-all duration-300 shadow-2xl cursor-pointer" value="make appoointment" name="submit" id="submit">
        </form>
    </section>
    <!-- contact section -->

    <script src="./script/script.js"></script>
</body>
</html>