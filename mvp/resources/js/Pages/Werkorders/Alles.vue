<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorders</title>
            </Head>
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
            this.$inertia.visit('werkorders/' + id);
        }
    }
}
</script>

<style scoped>
.table {
    width:90%;
    margin:auto;
}
</style>
