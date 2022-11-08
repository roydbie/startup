<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorder {{ werkorder.id }}</title>
            </Head>

            <Link href="/werkorders" class="btn btn-primary fnt09 mt-3" style="margin-left: 5%;">Terug</Link>

            <div class="btn-group mt-3" role="group" style="margin-left: 2.5%;">
                <button @click="currentView = 'factuur'" :class="[currentView === 'factuur' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Factuur</button>
                <button @click="currentView = 'factuur+factuurregels'" :class="[currentView === 'factuur+factuurregels' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Factuurregels</button>
                <button @click="currentView = 'factuur+opmerkingen'" :class="[currentView === 'factuur+opmerkingen' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Opmerkingen</button>
            </div>

            <Link href="/werkorders" class="btn btn-primary fnt09 mt-3" style="margin-left: 1%;">Print werkorder</Link>

            <button v-on:click="verwijder(werkorder.id)" class="btn btn-danger fnt09 mt-3" style="margin-left: 1%;">Verwijder werkorder</button>

            <div v-if="currentView === 'factuur'" class="column" style="width:60%;margin-left:20%;margin-right:20%;">
                <h2 class="mx-5 mt-4">Werkorder {{ werkorder.id }}</h2>
                <table class="table" style="width:60%;margin-left:10%;">
                    <tbody>
                    <tr>
                        <th scope="row">Omschrijving</th>
                        <td colspan="2">{{werkorder.omschrijving}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Aangemaakt door</th>
                        <td colspan="2">{{ werkorder.aangemaakt_door }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Klant</th>
                        <td colspan="2">{{ werkorder.klant }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td colspan="2">{{ werkorder.status }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Geschatte tijdsduur</th>
                        <td colspan="2">{{ werkorder.geschatte_tijdsduur }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Plandatum</th>
                        <td colspan="2">{{ werkorder.planning_datum }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Plantijd</th>
                        <td colspan="2">{{ werkorder.planning_tijd }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Deadline datum</th>
                        <td colspan="2">{{ werkorder.deadline_datum }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Deadline tijd</th>
                        <td colspan="2">{{ werkorder.deadline_tijd }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Aangemaakt op</th>
                        <td colspan="2">
                            {{ new Date(werkorder.aanmaak_timestamp).getDate() + "-" + new Date(werkorder.aanmaak_timestamp).getMonth() + "-" + new Date(werkorder.aanmaak_timestamp).getFullYear()}}
                            {{ " om " + new Date(werkorder.aanmaak_timestamp).getHours() + ":" + new Date(werkorder.aanmaak_timestamp).getMinutes() }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div v-if="currentView === 'factuur+factuurregels'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Werkorder {{ werkorder.id }}</h2>
                    {{ werkorder.omschrijving }}
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Factuurregels</h2>
                </div>
            </div>

            <div v-if="currentView === 'factuur+opmerkingen'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Werkorder {{ werkorder.id }}</h2>
                    {{ werkorder.omschrijving }}
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <Opmerkingen></Opmerkingen>
                </div>
            </div>



        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Layout/Default.vue'

import Opmerkingen from '../../Components/Werkorders/Opmerkingen.vue'


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
        Opmerkingen
    },
    props: {
        werkorder: Object
    },
    methods: {
        verwijder(id) {
            if(confirm('Weet u zeker dat u werkorder ' + id + ' wilt verwijderen?')){
                this.$inertia.delete('/werkorders/' + id)
            }
        },
    }
}
</script>

<style scoped>

.column {
    display:inline-block;
    margin-top: 2rem;
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

</style>
