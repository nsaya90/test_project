<script setup>
import Navbar from "../../Components/Navbar.vue";


</script>



<template>

<Navbar/>
    

    <body>
        <div class="wrapper">
            <div class="box_img"><h1>Bienvenue</h1></div>

            <div class="box_link">
                <!-- Il faut binder le href puis déclarer la route (voir la page web) correspondante a la vue souhaité -->
                <a :href="route('login')" class="link-warning">Connectez-vous</a>
                <a :href="route('register')" class="link-warning">Enregistrez-vous</a>
            </div>


            <div class="box_space"></div>

            <p class="t1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt inventore assumenda dolore. Numquam iure aliquam natus, placeat aut quae at in nobis adipisci exercitationem culpa incidunt harum nam accusantium quasi suscipit a corrupti rerum itaque sit repudiandae odit nulla neque ad! Ullam asperiores possimus recusandae illum, ab quasi magni veniam cupiditate, nam magnam consequuntur, quae distinctio officia quas minus quis. Cupiditate accusamus facere aperiam harum commodi eligendi ea expedita sint corporis tempore ipsum adipisci in blanditiis velit nisi, necessitatibus praesentium odio vel fugiat debitis, assumenda consequuntur est! Molestiae nihil, odio distinctio sed neque possimus esse labore nam vitae ratione eligendi ex quidem debitis aperiam totam ab dolorem porro minima laboriosam doloribus eveniet maiores praesentium facere. Beatae possimus doloribus libero itaque reiciendis dicta laborum? Cumque nam numquam nisi autem ad, explicabo qui quaerat aliquam odio deserunt. Ut doloribus id voluptatum explicabo aperiam iure praesentium atque nobis, corrupti facilis excepturi, fugit mollitia nostrum quasi eum iste soluta distinctio perspiciatis. At officiis, illum fugit omnis ad veniam aut dignissimos laborum vero, velit eius molestiae porro quia minus ipsa? Sapiente neque ullam aliquid deleniti molestias. Quia sit modi, id, minus doloribus nulla, aperiam tempora magnam sint consectetur molestiae adipisci dolorem! Maiores amet dolorem hic!
            </p>
            <div class="box_space"></div>
        </div>
    </body>
</template>

<style>
.box_link{

    display: flex;
    justify-content: space-around;
    width: 100%;
    font-size: 50px ;
}

.t1{
    text-align: center;
    width:800px;
}

.wrapper{
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.box_img {
    background-image: url(../../../images/2.jpg);
    width: 100%;
    height: 200px;
    background-position: center;
    background-size: 1200px;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.box_img h1 {
    color: white;
    font-size: 80px;
}

/* Séparateur */

.box_space {
    background-color: black;
    height: 10px;
    width: 300px;
}
</style>
