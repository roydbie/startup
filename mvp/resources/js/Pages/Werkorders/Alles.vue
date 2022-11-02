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
                        <th scope="col" v-for="(value,key) in werkorders[0]">{{ key }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="werkorder in werkorders" v-on:click="naarDetails(werkorder.id)" style="cursor: pointer;">
                        <td v-for="value in werkorder">{{ value }}</td>
                    </tr>
                </tbody>
            </table>
        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Layout/Default.vue'

export default {
    props: {
        werkorders: Array,
    },
    components: {
        Layout,
        Link,
        Head,
    },
    methods: {
        naarDetails(id) {
            this.$inertia.visit('werkorders/details/' + id);
        }
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
