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

            <button v-on:click="deleteWerkorder(werkorder.id)" class="btn btn-danger fnt09 mt-3" style="margin-left: 1%;">Verwijder werkorder</button>

            <div v-if="currentView === 'factuur'" class="column" style="width:60%;margin-left:20%;margin-right:20%;">
                <h2 class="mx-5 mt-4">Werkorder {{ werkorder.id }}</h2>
                <table class="table" style="width:60%;margin-left:10%;">
                    <tbody>
                    <tr>
                        <th scope="row">Omschrijving</th>
                        <td colspan="2">
                            <input type="text" class="form-control fnt09" v-model="werkorder.omschrijving" disabled>
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Aangemaakt door</th>
                        <td colspan="2">
                            <input type="text" class="form-control fnt09" v-model="werkorder.aangemaakt_door" disabled>
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Klant</th>
                        <td colspan="2">
                            <input type="text" class="form-control fnt09" v-model="werkorder.klant" disabled>
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td colspan="2">
                            <input type="text" class="form-control fnt09" v-model="werkorder.status" disabled>
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Geschatte tijdsduur</th>
                        <td colspan="2">
                            <input type="time" class="form-control fnt09" v-model="werkorder.geschatte_tijdsduur" v-on:change="updateForm.toonOKbuttonGeschatteTijdsduur = true">
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" v-if="updateForm.toonOKbuttonGeschatteTijdsduur === true" v-on:click="updateWerkorder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Plandatum</th>
                        <td colspan="2">
                            <input type="date" class="form-control fnt09" v-model="werkorder.planning_datum" v-on:change="updateForm.toonOKbuttonPlanningDatum = true">
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" v-if="updateForm.toonOKbuttonPlanningDatum === true" v-on:click="updateWerkorder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Plantijd</th>
                        <td colspan="2">
                            <input type="time" class="form-control fnt09" v-model="werkorder.planning_tijd" v-on:change="updateForm.toonOKbuttonPlanningTijd = true">
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" v-if="updateForm.toonOKbuttonPlanningTijd === true" v-on:click="updateWerkorder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Deadline datum</th>
                        <td colspan="2">
                            <input type="date" class="form-control fnt09" v-model="werkorder.deadline_datum" v-on:change="updateForm.toonOKbuttonDeadlineDatum = true">
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" v-if="updateForm.toonOKbuttonDeadlineDatum === true" v-on:click="updateWerkorder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Deadline tijd</th>
                        <td colspan="2">
                            <input type="time" class="form-control fnt09" v-model="werkorder.deadline_tijd" v-on:change="updateForm.toonOKbuttonDeadlineTijd = true">
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" v-if="updateForm.toonOKbuttonDeadlineTijd === true" v-on:click="updateWerkorder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                </svg>
                            </button>
                        </td>
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
            updateForm: {
                toonOKbuttonStatus: false,
                toonOKbuttonGeschatteTijdsduur: false,
                toonOKbuttonPlanningDatum: false,
                toonOKbuttonPlanningTijd: false,
                toonOKbuttonDeadlineDatum: false,
                toonOKbuttonDeadlineTijd: false,
            },
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
        deleteWerkorder(id) {
            if(confirm('Weet u zeker dat u werkorder ' + id + ' wilt verwijderen?')){
                this.$inertia.delete('/werkorders/' + id)
            }
        },
        updateWerkorder() {
            Object.keys(this.updateForm).forEach(key => {
                this.updateForm[key] = false;
            });
            this.$inertia.put('/werkorders/' + this.werkorder.id, {
                geschatte_tijdsduur: this.werkorder.geschatte_tijdsduur,
                planning_datum: this.werkorder.planning_datum,
                planning_tijd: this.werkorder.planning_tijd,
                deadline_datum: this.werkorder.deadline_datum,
                deadline_tijd: this.werkorder.deadline_tijd
            });
        }
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

th {
    vertical-align: middle;
}

</style>
