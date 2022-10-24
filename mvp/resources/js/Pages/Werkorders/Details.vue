<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorder {{ id }}</title>
            </Head>

            <div class="btn-group mt-3" role="group" style="margin-left: 5%;">
                <button @click="currentView = 'factuur'" :class="[currentView === 'factuur' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Factuur</button>
                <button @click="currentView = 'factuur+factuurregels'" :class="[currentView === 'factuur+factuurregels' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Factuurregels</button>
                <button @click="currentView = 'factuur+opmerkingen'" :class="[currentView === 'factuur+opmerkingen' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Opmerkingen</button>
            </div>


            <div v-if="currentView === 'factuur'" class="column" style="width:60%;margin-left:20%;margin-right:20%;">
                <h2 class="mx-5 mt-4">Werkorder {{ id }}</h2>
            </div>

            <div v-if="currentView === 'factuur+factuurregels'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Werkorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Factuurregels</h2>
                </div>
            </div>

            <div v-if="currentView === 'factuur+opmerkingen'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Werkorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Opmerkingen</h2>
                    <ul class="nav nav-pills mb-3 mx-3 mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-banden-tab" data-bs-toggle="pill" data-bs-target="#pills-banden" type="button" role="tab" aria-controls="pills-banden" aria-selected="true">Banden</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-uitlaat-tab" data-bs-toggle="pill" data-bs-target="#pills-uitlaat" type="button" role="tab" aria-controls="pills-uitlaat" aria-selected="false">Uitlaat</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Disabled</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-banden" role="tabpanel" aria-labelledby="pills-banden-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item-success" aria-current="true">
                                        Wiel/velg ondeugdelijk
                                    </li>
                                    <li class="list-group-item">
                                        Band L.V. verv.
                                    </li>
                                    <li class="list-group-item list-group-item-success">
                                        Band R.V. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Band L.A. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Band R.A. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting L.V. band
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting R.V. band
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting L.A. band
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting R.A. band
                                    </li>
                                    <li class="list-group-item">
                                        Band L.V. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Band R.V. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Band L.A. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Band R.A. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Bandenspanning te laag/controleren
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-uitlaat" role="tabpanel" aria-labelledby="pills-uitlaat-tab" tabindex="0">
                            asdjfsdjanvosd
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            ABC123
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            8799879
                        </div>
                    </div>
                </div>
            </div>



        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Layout/Default.vue'


export default {
    data(){
        return {
            currentView: 'factuur',
            activeClass: 'active-submenu',
        }
    },
    components: {
        Layout,
        Link,
        Head,
    },
    props: {
        id: String
    }
}
</script>

<style scoped>
.fnt09 {
    font-size: 0.9rem!important;
}

.column {
    display:inline-block;
    margin-top: 1rem;
    background-color: #f2f2f2;
    border-radius: 0.5rem;
    vertical-align: top;
    font-size: 0.9rem!important;
    margin-bottom: 2rem;
    max-height:80vh;
}

.active-submenu {
    background-color: #0d6efd;
    color: white;
}

.list-group-container {
    height: 32rem;
    max-height:70%;
    overflow: scroll;
}

</style>
