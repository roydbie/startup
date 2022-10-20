<template>
    <div>
        <Layout>
            <Head>
                <title>Workorder {{ id }}</title>
            </Head>

            <div class="btn-group mx-3 mt-3" role="group">
                <button @click="currentView = 'invoice'" :class="[currentView === 'invoice' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Invoice</button>
                <button @click="currentView = 'invoice+billing'" :class="[currentView === 'invoice+billing' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Add billing items</button>
                <button @click="currentView = 'invoice+annotations'" :class="[currentView === 'invoice+annotations' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Add annotations</button>
            </div>


            <div v-if="currentView === 'invoice'" class="column" style="width:60%;margin-left:20%;margin-right:20%;">
                <h2 class="mx-5 mt-4">Workorder {{ id }}</h2>
            </div>

            <div v-if="currentView === 'invoice+billing'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Workorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Billing items</h2>
                </div>
            </div>

            <div v-if="currentView === 'invoice+annotations'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Workorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Annotations</h2>
                    <ul class="nav nav-pills mb-3 mx-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Disabled</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            ja leuk
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            asdjfsdjanvosd
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            ABC123
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            8799879
                        </div>
                    </div>



                    <!--<ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                        <li class="list-group-item list-group-item-success" aria-current="true">An active item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item list-group-item-success">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>-->
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
            currentView: 'invoice',
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
}

.active-submenu {
    background-color: #0d6efd;
    color: white;
}

</style>
