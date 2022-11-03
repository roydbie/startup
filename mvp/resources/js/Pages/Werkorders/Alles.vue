<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorders</title>
            </Head>

            <Link href="/werkorders/nieuw" class="btn btn-primary fnt09 mt-3" style="margin-left: 5%;">Nieuw werkorder</Link>

            <h1 class="page-heading">Werkorders</h1>

            <table class="table hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">omschrijving</th>
                        <th scope="col">aangemaakt_door</th>
                        <th scope="col">klant</th>
                        <th scope="col">status</th>
                        <th scope="col">geschatte_tijdsduur</th>
                        <th scope="col">planning_datum</th>
                        <th scope="col">planning_tijd</th>
                        <th scope="col">deadline_datum</th>
                        <th scope="col">deadline_tijd</th>
                        <th scope="col">aanmaak_timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="werkorder in werkorders" v-on:click="naarDetails(werkorder.id)" style="cursor: pointer;">
                        <td >{{ werkorder.id }}</td>
                        <td >{{ werkorder.omschrijving }}</td>
                        <td >{{ werkorder.aangemaakt_door }}</td>
                        <td >{{ werkorder.klant }}</td>
                        <td >{{ werkorder_statussen.find(({ id }) => id == werkorder.status).status }}</td>
                        <td >{{ werkorder.geschatte_tijdsduur }}</td>
                        <td >{{ werkorder.planning_datum }}</td>
                        <td >{{ werkorder.planning_tijd }}</td>
                        <td >{{ werkorder.deadline_datum }}</td>
                        <td >{{ werkorder.deadline_tijd }}</td>
                        <td >{{ werkorder.aanmaak_timestamp }}</td>
                    </tr>
                </tbody>
            </table>
        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Layout/Default.vue'
import axios from "axios";

export default {
    props: {
        werkorders: Array,
    },
    components: {
        Layout,
        Link,
        Head,
    },
    data () {
        return {
            werkorder_statussen: []
        }
    },
    methods: {
        naarDetails(id) {
            this.$inertia.visit('werkorders/details/' + id);
        },
    },
    beforeMount() {
        axios
            .get('http://127.0.0.1:8000/api/werkorder_statussen')
            .then((res) => {
                this.werkorder_statussen = res.data;
            })
            .catch((error) => {
                console.log(error);
            });
    }
}
</script>

<style scoped>
.table {
    width:90%;
    margin:auto;
    font-size:0.9rem!important;
}

table, tr td {
    border: 1px solid grey;
}
tbody {
    display: block;
    height: 50vh;
    overflow: auto;
}
thead, tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed;
}
thead {
    width: calc( 100% - 1em )/* scrollbar is average 1em/16px width, remove it from thead width */
}
</style>
